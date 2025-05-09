<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Book;

class BookApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_book_successfully(): void
    {
        $response = $this->postJson('/api/books', [
            'title' => '1984',
            'author' => 'George Orwell',
            'publication_year' => 1949,
        ]);

        $response->assertStatus(201)
                 ->assertJsonFragment(['title' => '1984']);
    }

    public function test_validation_error_on_create(): void
    {
        $response = $this->postJson('/api/books', [
            'title' => '',
            'author' => '',
            'publication_year' => 1499,
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['title', 'author', 'publication_year']);
    }

    public function test_list_all_books(): void
    {
        Book::factory()->count(3)->create();

        $response = $this->getJson('/api/books');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }

    public function test_get_single_book(): void
    {
        $book = Book::factory()->create();

        $response = $this->getJson("/api/books/{$book->id}");

        $response->assertStatus(200)
                 ->assertJsonFragment(['title' => $book->title]);
    }

    public function test_update_book(): void
    {
        $book = Book::factory()->create();

        $response = $this->putJson("/api/books/{$book->id}", [
            'title' => 'Updated Title',
            'author' => $book->author,
            'publication_year' => $book->publication_year,
        ]);

        $response->assertStatus(200)
                 ->assertJsonFragment(['title' => 'Updated Title']);
    }

    public function test_delete_book(): void
    {
        $book = Book::factory()->create();

        $response = $this->deleteJson("/api/books/{$book->id}");

        $response->assertStatus(204);
    }
}
