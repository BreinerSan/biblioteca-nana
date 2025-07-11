<div class="bg-gray-50 min-h-screen">
    <x-header />

    <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Descubre tu próxima lectura</h2>
            <p class="text-xl mb-8 text-blue-100">Miles de libros esperando por ti</p>

            <div class="relative max-w-2xl mx-auto">
                <div class="flex">
                    <input
                        type="text"
                        placeholder="Buscar libros, autores, géneros..."
                        class="bg-gray-50 flex-1 px-6 py-4 text-gray-800 text-lg rounded-l-xl border-0 focus:ring-4 focus:ring-blue-300 focus:outline-none"
                        wire:model.live.debounce.500ms="search"
                    >
                    <button class="bg-orange-500 hover:bg-orange-600 px-8 py-4 rounded-r-xl transition-colors font-semibold">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                @forelse ($books as $book)
                    <x-book-card :book="$book" />
                @empty
                    <div class="col-span-full text-center py-10 text-gray-600">
                        No se encontraron libros que coincidan con tu búsqueda o filtro.
                    </div>
                @endforelse
            </div>

            @if ($books->count() > 0)
                <div class="text-center mt-12">
                    {{ $books->links() }}
                </div>
            @endif

        </div>
    </section>

    <x-categories />

    <x-footer />

    @if($showBookModal)
        <x-book-details-modal :book="$selectedBook" />
    @endif
</div>
