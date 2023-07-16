<?php

namespace Database\Seeders;

use App\Models\Tukang;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::create([
            'name' => 'Motif Fauna',
            'image' => 'image/category/Fauna.jpg',
        ]);
        Category::create([
            'name' => 'Motif Flora',
            'image' => 'image/category/Flora.jpg',
        ]);
        Category::create([
            'name' => 'Motif Patung',
            'image' => 'image/category/Patung.jpg',
        ]);
        Category::create([
            'name' => 'Motif Relief',
            'image' => 'image/category/Relief.jpg',
        ]);
        Category::create([
            'name' => 'Motif Geometris',
            'image' => 'image/category/Geometris.jpg',
        ]);
        Category::create([
            'name' => 'Motif custom',
            'image' => 'image/category/custom.jpg',
        ]);
        Tukang::create([
            'name' => 'Ahmad husain1',
            'category_id' => 1,
            'price' => 10000,
            'image' => 'image/tukang/Tukang1.jpg',
            'address' => 'petekeyan rt 2 rw 3',
            'telepon' => '089619080300',
        ]);
        Tukang::create([
            'name' => 'Ahmad husain2',
            'category_id' => 2,
            'price' => 9000,
            'image' => 'image/tukang/Tukang3.jpg',
            'address' => 'petekeyan rt 2 rw 3',
            'telepon' => '089619080300',
        ]);
        Tukang::create([
            'name' => 'Ahmad husain3',
            'category_id' => 3,
            'price' => 8000,
            'image' => 'image/tukang/Tukang2.jpg',
            'address' => 'petekeyan rt 2 rw 3',
            'telepon' => '089619080300',
        ]);
        Tukang::create([
            'name' => 'Ahmad husain4',
            'category_id' => 4,
            'price' => 12000,
            'image' => 'image/tukang/Tukang4.jpg',
            'address' => 'petekeyan rt 2 rw 3',
            'telepon' => '089619080300',
        ]);
        Tukang::create([
            'name' => 'Ahmad husain5',
            'category_id' => 5,
            'price' => 11000,
            'image' => 'image/tukang/Tukang3.jpg',
            'address' => 'petekeyan rt 2 rw 3',
            'telepon' => '089619080300',
        ]);
        Tukang::create([
            'name' => 'Ahmad husain6',
            'category_id' => 6,
            'price' => 14000,
            'image' => 'image/tukang/Tukang2.jpg',
            'address' => 'petekeyan rt 2 rw 3',
            'telepon' => '089619080300',
        ]);
    }
}