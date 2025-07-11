<div>

    <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Descubre tu próxima lectura</h2>
            <p class="text-xl mb-8 text-blue-100">Miles de libros esperando por ti</p>
            
            <div class="relative max-w-2xl mx-auto">
                <div class="flex">
                    <input 
                        wire:model.live.debounce.500ms="search"
                        type="text" 
                        placeholder="Buscar libros, autores, géneros..." 
                        class="flex-1 px-6 py-4 text-gray-800 text-lg rounded-l-xl border-0 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                    >
                    <button class="bg-orange-500 hover:bg-orange-600 px-8 py-4 rounded-r-xl transition-colors font-semibold">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    @if($books->count() > 0)
         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($books as $book)
                <div
                    wire:click="selectBook({{ $book->id }})"
                    class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg cursor-pointer flex flex-col"
                >
                    <img src="{{ asset($book->cover_image) }}" alt="Portada de {{ $book->title }}" class="h-48 w-96 object-cover">
                    <div class="p-4 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="font-bold text-xl text-gray-800 mb-2">{{ $book->title }}</h3>
                            <p class="text-gray-600 text-sm">Autor: {{ $book->author }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $books->links() }}
        </div>
    @else
        <div class="text-center py-10 text-gray-600 text-lg">
            No se encontraron libros que coincidan con tu búsqueda.
        </div>
    @endif

    @if ($showDescriptionModal && $selectedBook)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50">
            <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full p-6 relative">
                <button
                    wire:click="resetSelectedBook"
                    class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-2xl font-bold"
                >
                    &times;
                </button>

                <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ $selectedBook->title }}</h2>
                <p class="text-gray-700 text-lg mb-2">**Autor:** {{ $selectedBook->author }}</p>
                <p class="text-gray-700 text-lg mb-2">**Año de Publicación:** {{ $selectedBook->publication_year }}</p>
                <p class="text-gray-700 text-lg mb-4">**ISBN:** {{ $selectedBook->isbn }}</p>

                <div class="max-h-64 overflow-y-auto mb-6 pr-2">
                    <p class="text-gray-800 leading-relaxed">{{ $selectedBook->description }}</p>
                </div>

                @if ($selectedBook->pdf_path)
                    <a
                        href="{{ asset('storage/' . $selectedBook->pdf_path) }}"
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
    @endif

</div>
