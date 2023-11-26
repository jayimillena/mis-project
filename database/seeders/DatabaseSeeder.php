<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\ResourceCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $resource_categories = [
            [
                'slug' => Str::random(11),
                'category' => "Computer Fundamentals",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Types of Computers",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Parts of the Computer",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Introduction to Computer Hardware",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Mobilephones as Computer",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Cloud Service Providers",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Operating System",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Windows Keyboard Shortcuts",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Graphical User Interface",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Introduction to Web Browser",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "History of Internet",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Internet Issues",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "How to take Care of Computer",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Software Applications",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Office Productivity Tools",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Google Calendars",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Google Keeps",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Google Reminders",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Google Maps",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Introduction to Social Media",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Introduction to Multimedia",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Entertainment and Games",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "How to Control Computer Addiction",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Basics in Microsoft Word",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Basics in Microsoft Excel",
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'category' => "Basics in Microsoft PowerPoint",
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ];
        
        ResourceCategory::insert($resource_categories);
    }
}
