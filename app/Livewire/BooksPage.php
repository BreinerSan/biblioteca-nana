<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\BookService;
use App\Http\Models\Book;

class BooksPage extends Component
{
    use WithPagination;

    public string $search = '';
    public bool $showBookModal = false; // Controla la visibilidad de la modal
    public $selectedBook = null;

     // Escucha el evento para cerrar la modal de descripcion desde otro componente si fuera necesario
    protected $listeners = ['closeDescriptionModal' => 'closeBookModal', 'openModalFromOutside' => 'selectBook'];

    public function updatingSearch(){
        // Reinicia la paginacion cada vez que cambia el termino de busqueda
        $this->resetPage();
    }

    public function updatedSearch()
    {
        // El método render se llamará automáticamente cuando 'search' cambie
    }

    // Metodo para abrirl la modal
    public function selectBook(int $bookId){
        $bookService = app(BookService::class);

        $this->selectedBook = $bookService->findBookById($bookId);
        $this->showBookModal = true;
    }

    // Al salir de la modal limpio los valores del libro seleccionado
    public function closeBookModal(){
        $this->selectedBook = null;
        $this->showBookModal = false;
    }

    public function render()
    {
        $bookService = app(BookService::class);

        // Usa el servicio para obtener los libros
        $books = $bookService->getPaginatedBooks($this->search, 12);

        return view('livewire.books-page', [
            'books' => $books,
        ]);
    }
}
