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
        $posts_conf_id = Category::where('name', 'Conférence')->value('id');

        $posts = Post::with('category')
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(4);

        $posts_conf = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'Conférence'))
            ->latest()
            ->paginate(4); // Paginer pour éviter la surcharge

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

    public function about(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->category;
        $posts_conf_id = Category::where('name', 'Conférence')->value('id');

        $posts = Post::with('category')
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(4);

        $posts_conf = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'Conférence'))
            ->latest()
            ->paginate(4); // Paginer pour éviter la surcharge

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

        $posts_distinction = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'DISTINCTION OUATTARA CLEMENT'))
            ->latest()
            ->take(10)
            ->get();

    

        return view('template.pages.about', compact(
            'posts_conf',
            'posts_conf_id',
            'posts',
            'categories',
            'category_id',
            'posts',
            'posts_prix',
            'posts_distc',
            'posts_distinction'
        ));
    }

    public function blog(Request $request)
    {

        $posts_conf_id = Category::where('name', 'Conférence')->value('id');

        $categories = Category::all();
        $category_id = $request->category;

        $posts = Post::with('category')
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(6);

        $posts_conf = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'Conférence'))
            ->latest()
            ->paginate(4); // Paginer pour éviter la surcharge

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


        return view('template.pages.blog', compact(
            'posts_conf',
            'posts_conf_id',
            'posts',
            'categories',
            'category_id',
            'posts_prix',
            'posts_distc'
        ));
    }

    public function edito(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->category;
        $posts_conf_id = Category::where('name', 'Conférence')->value('id');

        $posts = Post::with('category')
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(4);

        $posts_conf = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'Conférence'))
            ->latest()
            ->paginate(4); // Paginer pour éviter la surcharge

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

        $posts_edito = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'Édito'))
            ->latest()
        ->paginate(4); // recuperation de tout le contenu de la categorie edito

        return view('template.pages.edito',  compact(
            'posts_edito',
            'posts_conf',
            'posts_conf_id',
            'posts',
            'categories',
            'category_id',
            'posts_prix',
            'posts_distc'

        ));
    }

    public function contact(Request $request)
    {
        $categories = Category::all();
        $category_id = $request->category;
        $posts_conf_id = Category::where('name', 'Conférence')->value('id');

        $posts = Post::with('category')
            ->when($category_id, fn ($query) => $query->where('category_id', $category_id))
            ->latest()
            ->paginate(4);

        $posts_conf = Post::with('category')
            ->whereHas('category', fn ($query) => $query->where('name', 'Conférence'))
            ->latest()
            ->paginate(4); // Paginer pour éviter la surcharge

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

        return view('template.pages.contact', compact(
            'posts_conf',
            'posts_conf_id',
            'posts',
            'categories',
            'category_id',
            'posts_prix',
            'posts_distc'
        ));
    }

}
