<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Electronics', 'slug' => 'electronics', 'description' => 'Electronic devices']);
        Category::create(['name' => 'Fashion', 'slug' => 'fashion', 'description' => 'Clothing and accessories']);
        Category::create(['name' => 'Home Appliances', 'slug' => 'home-appliances', 'description' => 'Appliances for home use']);
    }
}
