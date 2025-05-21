<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->category;

            $posts = Post::with('category')
        ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
        ->latest()
        ->paginate(4);

        $posts_conf = Post::with('category')
        ->whereHas('category', fn ($query) => $query->where('name', 'Conférence'))
        ->latest()
        ->paginate(4); // Paginer pour éviter la surcharge

        $posts_conf_id = Category::where('name', 'Conférence')->value('id');

         $posts_prix = Post::with('category')
        ->whereHas('category', fn ($query) => $query->where('name', 'PRIX OUATTARA CLEMENT'))
        ->latest()
        ->take(3)
        ->get();

        $posts_distc = Post::with('category')
        ->whereHas('category', fn ($query) => $query->where('name', 'DISTINCTION OUATTARA CLEMENT'))
        ->latest()
        ->take(3)
        ->get();

        return view('home',  compact(
            'posts_conf',
            'posts_conf_id',
            'posts',
            'categories',
            'category_id',
            'posts_prix',
            'posts_distc'
        ));
    }

    public function about()
    {
        $posts_prix = Post::with('category')
        ->whereHas('category', fn ($query) => $query->where('name', 'PRIX OUATTARA CLEMENT'))
        ->latest()
        ->take(3)
        ->get();

        $posts_distc = Post::with('category')
        ->whereHas('category', fn ($query) => $query->where('name', 'DISTINCTION OUATTARA CLEMENT'))
        ->latest()
        ->take(3)
        ->get();

        return view('template.pages.about', compact('posts_prix', 'posts_distc'));
    }

    public function blog(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->category;

        $posts = Post::with('category')
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(8); // Paginer pour éviter la surcharge

        return view('template.pages.blog', compact('posts', 'categories', 'category_id'));
    }

    public function edito(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->category;

            $posts_edito = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'Édito'))
            ->latest()
            ->paginate(6); // recuperation de tout le contenu de la categorie edito

        return view('template.pages.edito',  compact('posts_edito','categories', 'category_id'));
    }

    public function contact()
    {
        return view('template.pages.contact');
    }

}
