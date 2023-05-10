<?php

namespace Database\Seeders;

use App\Models\Piece;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // baroque
        Piece::create([
            'name' => "Minuet in G major, BWV Anh 114",
            'composer' => "Johann Sebastian Bach",
            'link' => "https://www.youtube.com/watch?v=p1gGxpitLO8&ab_channel=TheGreatRepertoire",
            'genre_id' => 1,
        ]);
        Piece::create([
            'name' => "Canon in D",
            'composer' => "Johann Pachelbel",
            'link' => "https://www.youtube.com/watch?v=6jSLH9CDPPQ&ab_channel=Kassia",
            'genre_id' => 1,
        ]);
        Piece::create([
            'name' => "Concerto No. 4 in F minor, Op. 8 No. 4/RV 297 'Winter'",
            'composer' => "Antonio Vivaldi",
            'link' => "https://www.youtube.com/watch?v=pmiQ7og8gIM&ab_channel=amadeustv",
            'genre_id' => 1,
        ]);
        Piece::create([
            'name' => "Volin concerto in A minor BWV 1041",
            'composer' => "Johann Sebastian Bach",
            'link' => "https://www.youtube.com/watch?v=Q3-5144TaYg&ab_channel=Bachology",
            'genre_id' => 1,
        ]);
        Piece::create([
            'name' => "Concerto in E major, op. 8 no. 1, RV 269 “La primavera”",
            'composer' => "Antonio Vivaldi",
            'link' => "https://www.youtube.com/watch?v=e3nSvIiBNFo&ab_channel=ClassicalConcertChamberOrchestra",
            'genre_id' => 1,
        ]);
        Piece::create([
            'name' => "Prelude and Fugue in C major, BWV 846",
            'composer' => "Johann Sebastian Bach",
            'link' => "https://www.youtube.com/watch?v=frxT2qB1POQ&ab_channel=Rousseau",
            'genre_id' => 1,
        ]);
        Piece::create([
            'name' => "Concerto in E major, op. 8 no. 1, RV 269 “La primavera”",
            'composer' => "Antonio Vivaldi",
            'link' => "https://www.youtube.com/watch?v=pzlw6fUux4o&ab_channel=VoicesofMusic",
            'genre_id' => 1,
        ]);
       
        // Classical
        Piece::create([
            'name' => "Piano Sonata in A, K331: III",
            'composer' => "Wolfgang Amadeus Mozart",
            'link' => "https://www.youtube.com/watch?v=aeEmGvm7kDk&ab_channel=Rousseau",
            'genre_id' => 2,
        ]);
        Piece::create([
            'name' => "Piano Sonata in C major, No 16, K 545, Allegro",
            'composer' => "Wolfgang Amadeus Mozart",
            'link' => "https://www.youtube.com/watch?v=dNbqRC4xtEg&ab_channel=TheGreatRepertoire",
            'genre_id' => 2,
        ]);
        Piece::create([
            'name' => "Concerto in E major, op. 8 no. 1, RV 269 “La primavera”",
            'composer' => "Antonio Vivaldi",
            'link' => "https://www.youtube.com/watch?v=pzlw6fUux4o&ab_channel=VoicesofMusic",
            'genre_id' => 2,
        ]);
        Piece::create([
            'name' => "Moonlight Sonata (Piano Sonata No. 14, Op. 27 No. 2, 1st Movement)",
            'composer' => "Johann Sebastian Bach",
            'link' => "https://www.youtube.com/watch?v=sbTVZMJ9Z2I&ab_channel=Rousseau",
            'genre_id' => 2,
        ]);
        Piece::create([
            'name' => "Moonlight Sonata - 3rd Mvmt - No.14, Op.27 No.2",
            'composer' => "Johann Sebastian Bach",
            'link' => "https://www.youtube.com/watch?v=BV7RkEL6oRc&ab_channel=Rousseau",
            'genre_id' => 2,
        ]);
        Piece::create([
            'name' => "Sonatina in C major, Op. 36, No. 1, Allegro",
            'composer' => "Muzio Clementi",
            'link' => "https://www.youtube.com/watch?v=Ryq0nX1_Jds&list=PLO963W_c67MquzzXNsc_loh20b9jb-Dlj&index=3&ab_channel=TheGreatRepertoire",
            'genre_id' => 2,
        ]);
        Piece::create([
            'name' => "Sonatina Op.36 No.3",
            'composer' => "Muzio Clementi",
            'link' => "https://www.youtube.com/watch?v=ERNZAGQcyj0&ab_channel=HazelNguyenPianist",
            'genre_id' => 2,
        ]);

        // Romantic
        Piece::create([
            'name' => "Swan Lake, Op. 20: I. Scene",
            'composer' => "Pjotr Iljitsj Tsjaikovski",
            'link' => "https://www.youtube.com/watch?v=vAeRzW98IFw&ab_channel=Kassia",
            'genre_id' => 3,
        ]);
        Piece::create([
            'name' => "La campanella",
            'composer' => "Niccolò Paganini",
            'link' => "https://www.youtube.com/watch?v=LJNWB-jMhB4&ab_channel=MusicScores15",
            'genre_id' => 3,
        ]);
        Piece::create([
            'name' => "La campanella",
            'composer' => "Franz Liszt",
            'link' => "https://www.youtube.com/watch?v=JpfbDLFSZb4&ab_channel=ardiem",
            'genre_id' => 3,
        ]);
        Piece::create([
            'name' => "Bagatelle No. 25 in A minor (Für Elise)",
            'composer' => "Ludwig van Beethoven",
            'link' => "https://www.youtube.com/watch?v=wfF0zHeU3Zs&ab_channel=Rousseau",
            'genre_id' => 3,
        ]);
        Piece::create([
            'name' => "Gymnopédie No. 1",
            'composer' => "Erik Satie",
            'link' => "https://www.youtube.com/watch?v=2BnWamtDcgc&ab_channel=TheGreatRepertoire",
            'genre_id' => 3,
        ]);
        Piece::create([
            'name' => "Waltz in A minor, B 150, Op. Posth",
            'composer' => "Frédéric Chopin",
            'link' => "https://www.youtube.com/watch?v=algM0c_u99k&ab_channel=TheGreatRepertoire",
            'genre_id' => 3,
        ]);
        Piece::create([
            'name' => "Pavane, Op 50",
            'composer' => "Gabriel Fauré",
            'link' => "https://www.youtube.com/watch?v=SqEgbmNcNww&ab_channel=Dottore%27",
            'genre_id' => 3,
        ]);
        Piece::create([
            'name' => "Sicilienne, Op. 78",
            'composer' => "Gabriel Fauré",
            'link' => " https://www.youtube.com/watch?v=4FY-57Gt1TM&ab_channel=NickConstantine",
            'genre_id' => 3,
        ]);
        Piece::create([
            'name' => "Nocturne Op 9 No 2 (E Flat Major)",
            'composer' => "Frédéric Chopin",
            'link' => "https://www.youtube.com/watch?v=p29JUpsOSTE&ab_channel=Rousseau",
            'genre_id' => 3,
        ]);
    }
}
