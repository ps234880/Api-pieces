<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Piece;
use App\Models\Genre;

class MusicPieceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_piece_on_id()
    {
        $response = $this->get('api/pieces/1');
        $response->assertStatus(200);
        $response->assertJson(['name' => 'Minuet in G major, BWV Anh 114', 'composer' => 'Johann Sebastian Bach', 'link' => 'https://www.youtube.com/watch?v=p1gGxpitLO8&ab_channel=TheGreatRepertoire']);
    }

    public function test_piece_on_name()
    {
        $response = $this->get('api/pieces?name=Sicilienne, Op. 78');
        $response->assertStatus(200);
        $response->assertJsonCount(2);
        $response->assertJsonFragment(['name' => 'Sicilienne, Op. 78', 'composer' => 'Gabriel Fauré']);
    }

    public function test_insert_piece()
    {
        $data = ['name' => 'piecename', 'composer' => 'niccolopaganini', 'link' => 'links', 'genre_id' => 3];
        $response = $this->json('POST', 'api/pieces', $data);
        $response->assertStatus(201);

        $this->assertDatabaseHas('pieces', ['name' => 'piecename', 'composer' => 'niccolopaganini', 'link' => 'links', 'genre_id' => 3]);
        $response->assertJson(['name' => 'piecename', 'composer' => 'niccolopaganini', 'link' => 'links', 'genre_id' => 3,]);
    }

    // public function test_delete_piece()
    // {
    //     $response = $this->delete('api/pieces/6');
    //     $response->assertStatus(200);
    // }

    public function test_delete_created_piece()
    {
        $piece = Piece::create(array('name' => 'Caprice no. 6', 'composer' => 'niccolo paganini', 'link' => 'links', 'genre_id' => 3));
        $response = $this->delete('api/pieces/' . $piece->id);
        $this->assertDatabaseMissing('pieces', ['name' => 'Caprice no. 6']);
        $response->assertStatus(200);
    }
}
