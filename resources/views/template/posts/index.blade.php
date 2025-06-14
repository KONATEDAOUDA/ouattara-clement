@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4 sm:px-6 lg:px-8 ">
    <div class="flex flex-col md:flex-row justify-between items-center mb-6">
        <h1 class="text-2xl font-bold mb-4 md:mb-0 text-white">Liste des articles</h1>

        <a href="{{ route('posts.create') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm">
            + Nouvel article
        </a>

        <form action="{{ route('posts.index') }}" method="GET" class="flex space-x-3">
            <select name="category" style="color: black" class="border-gray-300 rounded-md shadow-sm text-sm">
                <option value="">Toutes les catégories</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $category_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="bg-indigo-600 text-white px-3 py-1 rounded hover:bg-indigo-700 text-sm">
                Filtrer
            </button>
        </form>
    </div>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if ($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            @foreach ($posts as $post)
                <div class="bg-white shadow-sm rounded p-6">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="rounded-md w-full h-48 object-cover mb-4">
                    @endif

                    <h2 class="text-lg font-semibold mb-2">{{ $post->title }}</h2>
                    <p class="text-sm text-gray-600 mb-2">
                        Catégorie : <strong class="text-green-600">{{ $post->category->name ?? 'Sans catégorie' }}</strong>
                    </p>

                    <!-- Contenu avec bonne classe prose -->
                    <div class="prose prose-sm max-w-none text-gray-700 overflow-hidden">
                        {!! Str::limit(strip_tags($post->content), 120) !!}
                    </div>

                    <div class="mt-4 flex space-x-2">
                         <a href="{{ route('posts.show', $post) }}}" class="text-sm bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded">
                            Consulter
                        </a>
                        <a href="{{ route('posts.edit', $post) }}" class="text-sm bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                            Modifier
                        </a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet article ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-sm bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $posts->appends(['category' => $category_id])->links() }}
        </div>
    @else
        <p class="text-gray-600">Aucun article trouvé pour cette catégorie.</p>
    @endif
</div>
@endsection
