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
                'title' => "History of Computer",
                'description' => 'The history of computers dates back to the early 17th century when Blaise Pascal invented the Pascaline, a mechanical calculator that could add, subtract, multiply, and divide. In the early 19th century, Charles Babbage designed the Analytical Engine, which is considered to be the first general-purpose computer. However, it was not until the mid-20th century that electronic computers were developed.',
                'author' => 'IT Tutorial PH',
                'url' => 'HLtzXAu5jWY',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Types of Computers",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Parts of the Computer",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Computer Hardware",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Computer Software",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Smart Phone as Computer",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Files and Folders",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Media files and Entertainment",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Cloud Service Providers",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Operating System",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Windows Keyboard Shortcuts",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Graphical User Interface",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Web Browser",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "History of Internet",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Internet Issues",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Office Productivity Tools",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Basics in Microsoft Word",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Basics in Microsoft Excel",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
            // [
            //     'slug' => Str::random(11),
            //     'title' => "Basics in Microsoft PowerPoint",
            //     'updated_at' => now(),
            //     'created_at' => now(),
            // ],
        ];
        
        Resource::insert($resources);
    }
}
