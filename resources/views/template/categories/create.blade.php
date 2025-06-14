@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8">
    <h2 class="text-xl font-semibold mb-4 text-white">Nouvelle Catégorie</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label class="block mb-2 font-medium">Nom de la catégorie</label>
        <input name="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2" required>

        @error('name') <div class="text-red-600 mt-1">{{ $message }}</div> @enderror

        <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded" type="submit">Créer</button>
    </form>
</div>
@endsection
