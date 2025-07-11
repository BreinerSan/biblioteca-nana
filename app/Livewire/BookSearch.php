<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\WithPagination;
use App\Services\BookService;

class BookSearch extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedBookId = null; // Almacenamos el id del libro seleccionado
    public $showDescriptionModal = false; // Controla la visibilidad de la modal

    // Opcional: para url amigable con el termino de busqueda
    protected $queryString = ['search' => ['except' => '']];

    // Escucha el evento para cerrar la modal de descripcion desde otro componente si fuera necesario
    protected $listeners = ['closeDescriptionModal' => 'resetSelectedBook'];

    public function updatingSearch(){
        // Reinicia la paginacion cada vez que cambia el termino de busqueda
        $this->resetPage();
    }

    public function selectBook($bookId){
        $this->selectedBookId = $bookId;
        $this->showDescriptionModal = true;
    }

    public function resetSelectedBook(){
        $this->selectedBookId = null;
        $this->showDescriptionModal = false;
    }

    public function render()
    {
        $bookService = app(BookService::class);
        // Usa el servicio para obtener los libros
        $books = $bookService->getPaginatedBooks($this->search, 12);

        // Obtener el libro seleccionado para el modal, si existe
        $selectedBook = null;
        if($this->selectedBookId){
            $selectedBook = $bookService->findBookById($this->selectedBookId);
        }

        return view('livewire.book-search', [
            'books' => $books,
            'selectedBook' => $selectedBook
        ]);
    }
}
