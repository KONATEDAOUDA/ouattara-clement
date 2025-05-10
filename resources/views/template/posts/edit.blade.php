@extends('layouts.app')

@section('content')
<div style="color: black" class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md mt-10">

    <h2 class="text-2xl font-bold mb-6">Modifier l’article</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Titre -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Titre de l'article</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <!-- Catégorie -->
        <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Catégorie</label>
            <select name="category_id" id="category_id"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                <option value="">-- Choisissez une catégorie --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $post->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Contenu -->
        <div class="mb-4">
            <label for="editor-container" class="block text-sm font-medium text-gray-700">Contenu</label>
            <div id="editor-container" style="height: 400px;">
                {!! old('content', $post->content ?? '') !!}
            </div>
            <input type="hidden" name="content" id="content">
        </div>

        <!-- Image -->
        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Image (optionnelle)</label>
            @if ($post->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="actuelle" class="w-48 h-auto rounded shadow">
                </div>
            @endif
            <input type="file" name="image" id="image"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-md text-sm font-medium">
                Mettre à jour l’article
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
     try {
         const quill = new Quill('#editor-container', {
             theme: 'snow',
             modules: {
                 toolbar: [
                     [{ 'header': [1, 2, 3, false] }],
                     ['bold', 'italic', 'underline', 'strike'],
                     [{ 'color': [] }, { 'background': [] }],
                     [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                     ['link', 'image', 'video'],
                     ['clean']
                 ]
             }
         });

         const toolbar = quill.getModule('toolbar');
         toolbar.addHandler('image', async function() {
             const input = document.createElement('input');
             input.type = 'file';
             input.accept = 'image/*';
             input.click();

             input.onchange = async () => {
                 const file = input.files[0];
                 if (!file) return;

                 const formData = new FormData();
                 formData.append('image', file);

                 try {
                     const response = await fetch('/upload-image', {
                         method: 'POST',
                         body: formData,
                         headers: {
                             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                             'Accept': 'application/json'
                         }
                     });

                     if (!response.ok) {
                         const error = await response.json();
                         throw new Error(error.message || 'Upload failed');
                     }

                     const { url } = await response.json();
                     const range = quill.getSelection();
                     quill.insertEmbed(range.index, 'image', url);

                 } catch (error) {
                     console.error('Upload error:', error);
                     alert(error.message || 'Upload failed');
                 }
             };
         });

         // Initialisation avec vérification
         const initialContent = {!! json_encode(old('content', $post->content ?? '')) !!};
         if (initialContent && initialContent !== '<p><br></p>') {
             quill.clipboard.dangerouslyPasteHTML(initialContent);
         }

         // Gestion de tous les formulaires de la page
         document.querySelectorAll('form').forEach(form => {
             form.addEventListener('submit', function(e) {
                 const contentField = document.getElementById('content');
                 if (contentField) {
                     contentField.value = quill.root.innerHTML;

                     // Validation optionnelle
                     if (contentField.required && !quill.getText().trim()) {
                         e.preventDefault();
                         alert('Le contenu est obligatoire');
                         return false;
                     }
                 }
                 return true;
             });
         });
     } catch (error) {
         console.error('Erreur initialisation Quill:', error);
     }
 });
 </script>
@endsection
