<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'nama' =>  'serum skintific',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 200000,
                'stock' => 50,
                'kategori' => 'kecantikan',
            ],

            [
                'nama' =>  'Helm',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 750000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],

            [
                'nama' =>  'Sepatu',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'topi',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'jaket',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'hoodie',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'kaos kaki',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'track pants',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'Sepatu',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'Sepatu',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'Sepatu',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],
            [
                'nama' =>  'Sepatu',
                'deskripsi' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, vitae?',
                'harga' => 480000,
                'stock' => 50,
                'kategori' => 'olahraga',
            ],

        ]);
    }
}
