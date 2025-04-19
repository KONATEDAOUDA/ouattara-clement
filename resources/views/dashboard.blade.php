@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    Bienvenue, <strong>{{ Auth::user()->name }}</strong>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Gestion des articles -->
                <div class="bg-white shadow-sm rounded p-6">
                    <h3 class="text-lg font-semibold mb-2">📝 Articles</h3>
                    <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">Voir les articles</a><br>
                    <a href="{{ route('posts.create') }}" class="text-blue-600 hover:underline">Créer un nouvel article</a>
                </div>

                <!-- Gestion des catégories -->
                <div class="bg-white shadow-sm rounded p-6">
                    <h3 class="text-lg font-semibold mb-2">📂 Catégories</h3>
                    <a href="{{ route('categories.index') }}" class="text-blue-600 hover:underline">Voir les catégories</a><br>
                    <a href="{{ route('categories.create') }}" class="text-blue-600 hover:underline">Ajouter une catégorie</a>
                </div>
            </div>

        </div>
    </div>
@endsection
