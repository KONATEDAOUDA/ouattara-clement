@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  bg-gray-800 text-white">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    Bienvenue, <strong>{{ Auth::user()->name }}</strong>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Gestion des articles -->
                <div class="bg-white shadow-sm rounded p-6">
                    <h3 class="text-lg font-semibold mb-2 text-center">📝 Articles</h3>
                    <div class="flex justify-center">
                        <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline"><strong>Voir les articles</strong></a>
                        <span class="mx-2">|</span>
                        <a href="{{ route('posts.create') }}" class="text-blue-600 hover:underline"><strong>Créer un nouvel article</strong></a>
                    </div>
                </div>

                <!-- Gestion des catégories -->

                <div class="bg-white shadow-sm rounded p-6">
                    <h3 class="text-lg font-semibold mb-2 text-center">📂 Catégories</h3>
                    <div class="flex justify-center">
                        <a href="{{ route('categories.index') }}" class="text-blue-600 hover:underline"><strong>Voir les catégories</strong></a>
                        <span class="mx-2">|</span>
                        <a href="{{ route('categories.create') }}" class="text-blue-600 hover:underline"><strong>Ajouter une catégorie</strong></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
