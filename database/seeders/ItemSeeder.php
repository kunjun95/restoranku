<?php

namespace Database\Seeders;

use Database\Factories\ItemFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Item;

class ItemSeeder extends Seeder
{
   
    public function run(): void
    {
        Item::factory(10)->create();
    }
}
