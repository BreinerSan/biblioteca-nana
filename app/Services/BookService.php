<?php

namespace App\Services;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookService
{
    /**
     * Obtiene una lista paginada de libros con capacidad de búsqueda
     * 
     * @param string|null $search
     * @param int $perPage
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getPaginatedBooks(?string $search = null, int $perPage = 12): LengthAwarePaginator
    {
        $query = Book::query();

        if($search){
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('author', 'like', '%' . $search . '%')
                  ->orWhere('isbn', 'like', '%' . $search . '%');
        }

        return $query->orderBy('title')->paginate($perPage);
    }

    /**
     * Obtiene un libro por su ID.
     *
     * @param int $id
     * @return \App\Models\Book|null
     */
    public function findBookById(int $id): ?Book
    {
        return Book::find($id);
    }

    /**
     * Crea un nuevo libro.
     *
     * @param array $data
     * @return \App\Models\Book
     */
    public function createBook(array $data): Book
    {
        $book = new Book();
        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->description = $data['description'];
        $book->isbn = $data['isbn'];
        $book->publication_year = $data['publication_year'];

        // Manejo de la subida de imagen de portada
        if (isset($data['cover_image']) && $data['cover_image']) {
            $path = Storage::disk('public')->putFile('covers', $data['cover_image']);
            $book->cover_image = $path;
        }

        // Manejo de la subida de PDF
        if (isset($data['pdf_file']) && $data['pdf_file']) {
            $path = Storage::disk('public')->putFile('pdfs', $data['pdf_file']);
            $book->pdf_path = $path;
        }

        $book->save();
        return $book;
    }

    /**
     * Actualiza un libro existente.
     *
     * @param \App\Models\Book $book
     * @param array $data
     * @return \App\Models\Book
     */
    public function updateBook(Book $book, array $data): Book
    {
        $book->title = $data['title'] ?? $book->title;
        $book->author = $data['author'] ?? $book->author;
        $book->description = $data['description'] ?? $book->description;
        $book->isbn = $data['isbn'] ?? $book->isbn;
        $book->publication_year = $data['publication_year'] ?? $book->publication_year;

        // Si se sube una nueva imagen de portada, eliminar la antigua
        if (isset($data['cover_image']) && $data['cover_image']) {
            if ($book->cover_image) {
                Storage::disk('public')->delete($book->cover_image);
            }
            $path = Storage::disk('public')->putFile('covers', $data['cover_image']);
            $book->cover_image = $path;
        }

        // Si se sube un nuevo PDF, eliminar el antiguo
        if (isset($data['pdf_file']) && $data['pdf_file']) {
            if ($book->pdf_path) {
                Storage::disk('public')->delete($book->pdf_path);
            }
            $path = Storage::disk('public')->putFile('pdfs', $data['pdf_file']);
            $book->pdf_path = $path;
        }

        $book->save();
        return $book;
    }

    /**
     * Elimina un libro.
     *
     * @param \App\Models\Book $book
     * @return bool|null
     */
    public function deleteBook(Book $book): ?bool
    {
        // Opcional: Eliminar los archivos asociados
        if ($book->cover_image) {
            Storage::disk('public')->delete($book->cover_image);
        }
        if ($book->pdf_path) {
            Storage::disk('public')->delete($book->pdf_path);
        }

        return $book->delete();
    }
}