<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;

class PostController extends Controller
{
    public function index(Request $request, Post $post)
    {
        $post->content = $this->formatQuillContent($post->content);

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

    public function store(Request $request, Post $post)
    {
        $post->content = $this->formatQuillContent($post->content);

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
        $post->content = $this->formatQuillContent($post->content);
        $categories = Category::all();
        $category_id = $request->category;
        $posts = Post::with('category')
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(4);

        $posts_distc = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'DISTINCTION OUATTARA CLEMENT'))
            ->latest()
            ->take(3)
            ->get();

        $posts_prix = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'PRIX OUATTARA CLEMENT'))
            ->latest()
            ->take(3)
            ->get();

        $posts_refer = Post::query()
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(3); // 3 derniers articles la pages detail
        $posts_conf = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'Conférence'))
            ->latest()
            ->paginate(4); // Paginer pour éviter la surcharge

        return view('template.posts.show', compact(
            'post',
            'posts_refer',
            'category_id',
            'posts',
            'posts_prix',
            'posts_distc',
            'posts_conf',
            'categories'
        ));
    }

    protected function formatQuillContent($content)
    {
        // Nettoyage
        $cleaned = Purifier::clean($content);

        // Correction des paragraphes vides
        $cleaned = str_replace('<p><br></p>', '', $cleaned);

        return $cleaned;
    }

    public function edit(Post $post,)
    {
        $post->content = $this->formatQuillContent($post->content);

        $categories = Category::all();
        return view('template.posts.edit', compact('post', 'categories'));
    }
    public function update(Request $request, Post $post)
    {
        $post->content = $this->formatQuillContent($post->content);

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
        $post->content = $this->formatQuillContent($post->content);

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Article supprimé avec succès.');
    }
}
