<?php

use Illuminate\Database\Seeder;
use App\ItemCategory;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            ['name' => 'Audio'],
            ['name' => 'TV'],
            ['name' => 'Media Player'],
            ['name' => 'Telepon'],
            ['name' => 'Pencahayaan'],
            ['name' => 'Alat Pendingin Ruangan'],
            ['name' => 'Rumah Tangga']
        ];

        foreach ($categories as $category) {
            ItemCategory::create($category);
        }
    }
}
