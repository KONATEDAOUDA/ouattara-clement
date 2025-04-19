<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('template.pages.about');
    }

    public function blog(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->category;

        $posts = Post::with('category')
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(6); // Paginer pour éviter la surcharge

        return view('template.pages.blog', compact('posts', 'categories', 'category_id'));
    }

    public function contact()
    {
        return view('template.pages.contact');
    }

}
