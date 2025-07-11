@props(['book'])

{{-- Overlay de la Modal --}}
<div
    class="fixed inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true"
>
    {{-- Fondo oscuro --}}
    <div
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
        aria-hidden="true"
        wire:click="closeBookModal" {{-- Cierra la modal al hacer clic fuera --}}
    ></div>

    {{-- Contenido de la Modal --}}
    <div
        class="bg-white rounded-lg shadow-xl transform sm:max-w-lg sm:w-full max-h-[90vh] overflow-y-auto z-10"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modal-title"
    >
        @if ($book) {{-- Asegúrate de que el libro no sea nulo antes de mostrar la info --}}
            <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-24 w-24 rounded-full bg-blue-100 sm:mx-0 sm:h-20 sm:w-20">
                        {{-- Miniatura de la imagen del libro en la modal --}}
                        <img
                            src="{{ $book['cover_image'] ?? asset('images/default-book.png') }}"
                            alt="{{ $book['title'] }}"
                            class="rounded-full w-20 h-20 object-cover"
                        >
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left flex-1">
                        <h3 class="text-2xl leading-6 font-bold text-gray-900" id="modal-title">
                            {{ $book['title'] }}
                        </h3>
                        <p class="text-lg text-gray-700 mt-1">{{ $book['author'] }}</p>
                        <p class="text-sm text-gray-700 mt-1">ISBN: {{ $book['isbn'] }}</p>
                        <div class="mt-2 text-sm text-gray-500">
                            <p class="text-base text-gray-700">{{ $book['description'] }}</p>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2 text-sm">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-semibold">
                                Calificación: {{ $book['rating'] }} <i class="fas fa-star text-yellow-500"></i>
                            </span>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">
                                Año: {{ $book['publication_year'] }}
                            </span>

                            {{-- convierto la variable $book['categories'] en un array de categorias --}}
                            @php
                                $categories = explode(',', $book['categories']);
                            @endphp

                            @foreach ($categories as $category)
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">{{ $category }}</span>
                            @endforeach

                            @if ($book->pdf_path)
                                <a
                                    href="{{ asset('storage/' . $book->pdf_path) }}"
                                    target="_blank"
                                    class="inline-block bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300"
                                >
                                    Previsualizar PDF
                                </a>
                            @else
                                <p class="text-red-500">No hay PDF disponible para este libro.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button
                    type="button"
                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                    wire:click="closeBookModal" {{-- Cierra la modal al hacer clic en el botón --}}
                >
                    Cerrar
                </button>
            </div>
        @else
            <div class="p-6 text-center text-gray-600">
                Cargando información del libro...
            </div>
        @endif
    </div>
</div>
