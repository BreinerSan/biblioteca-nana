@props(['book'])

<div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow group overflow-hidden">
    <div class="relative overflow-hidden">
        {{-- Contenedor para la imagen y el placeholder --}}
        <div class="w-full h-64 bg-gray-200 flex items-center justify-center relative overflow-hidden">
            {{-- Placeholder de carga (sin Alpine) --}}
            {{-- Puedes usar una lógica simple de Livewire para el placeholder si lo necesitas,
                 o simplemente dejar un spinner estático mientras la imagen carga
                 y Livewire actualiza el DOM. --}}


            {{-- Imagen del libro --}}
            <img
                src="{{ $book['cover_image'] ?? asset('images/default-book.png') }}"
                alt="{{ $book['title'] }}"
                class="w-full h-full object-cover absolute inset-0"
            >
        </div>

        @if ($book['is_new'])
            <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-bold z-10">
                NUEVO
            </div>
        @elseif ($book['is_popular'])
            <div class="absolute top-2 right-2 bg-orange-500 text-white px-2 py-1 rounded-full text-xs font-bold z-10">
                POPULAR
            </div>
        @endif
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100 z-10">
            <button
                class="bg-white text-gray-800 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
                wire:click="selectBook({{ $book['id'] }})"
            >
                Ver Detalles
            </button>
        </div>
    </div>
    <div class="p-4">
        <h4 class="font-bold text-gray-800 mb-2 line-clamp-2">{{ $book['title'] }}</h4>
        <p class="text-gray-600 text-sm mb-2">{{ $book['author'] }}</p>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <i class="fas fa-star text-yellow-400"></i>
                <span class="text-sm text-gray-600 ml-1">{{ $book['rating'] }}</span>
            </div>
            <span class="text-xs text-gray-500">{{ $book['year'] }}</span>
        </div>
        <div class="mt-3 flex space-x-2">
            {{-- convierto la variable $book['categories'] en un array de categorias --}}
            @php
                $categories = explode(',', $book['categories']);
            @endphp

            @foreach ($categories as $category)
                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">{{ $category }}</span>
            @endforeach
        </div>
    </div>
</div>
