<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->category;

        $posts = Post::query()
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(6); // 6 articles par page

        return view('template.posts.index', compact('posts', 'categories', 'category_id'));
    }
    public function create()
    {
        $categories = Category::all(); // Pour le formulaire
        return view('template.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/posts', 'public');
        }

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
            'image' => $imagePath,
        ]);

        return redirect()->route('posts.index')->with('success', 'Article publié avec succès.');
    }

    public function show(Request $request, Post $post)
    {
        $category_id = $request->category;
        $posts_refer = Post::query()
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(3); // 3 derniers articles la pages detail

        return view('template.posts.show', compact('post', 'posts_refer', 'category_id'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('template.posts.edit', compact('post', 'categories'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['title', 'content', 'category_id']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('posts', 'public');
        }

        $post->update($data);

        return redirect()->route('posts.index')->with('success', 'Article mis à jour avec succès.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Article supprimé avec succès.');
    }
}
