<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Resource;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $resources = [
            [
                'slug' => Str::random(11),
                'title' => "BSCS 2: Basic Knowledge About Java Language",
                'description' => 'Java is a versatile and widely-used object-oriented programming language known for its platform independence and robustness. It offers a rich set of features, facilitating the development of diverse applications across various domains and industries.',
                'author' => 'Kenneth Huab',
                'url' => 'CSxkNaE_cX0',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "BSCS 2: Basic Knowledge About Installing Operating System",
                'description' => 'In this video where going to talk about what is Operating system, type of OS and how to install an Operating System.',
                'author' => 'Jubert Artiaga, Mark Dhaniel Cipriano, John Michael Lomerio, Mildred Sarturio',
                'url' => 'Mx9cJs17paA',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "BSCS 2: Basic Knowledge About Computer",
                'description' => 'In this video where going to talk about what is computer, what are the key points to use a computer and how it is use in this day.',
                'author' => 'Angelo Dominguiano - Kimberly Anne Bolante - Grace Belludo',
                'url' => '0zUZTuQ04as',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "BSCS 2: Basic Knowledge About Python",
                'description' => 'In this video where going to talk about what is python, how it is use and what are the value of python in computer science.',
                'author' => 'Elyssa Espinosa, Ferdinand Perez, Fatima Palima',
                'url' => 'AT7vB1n42eA',
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ];
        
        Resource::insert($resources);
    }
}
