<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['parent_id' => null, 'name' => 'Appliances', 'order' => 1, 'slug' => 'appliances', 'created_at' => $now, 'updated_at' => $now],
            ['parent_id' => null, 'name' => 'Computers', 'order' => 2, 'slug' => 'computers', 'created_at' => $now, 'updated_at' => $now],
            ['parent_id' => null, 'name' => 'Electronics', 'order' => 3, 'slug' => 'electronics', 'created_at' => $now, 'updated_at' => $now],
            ['parent_id' => 2, 'name' => 'Laptops', 'order' => 1, 'slug' => 'laptops', 'created_at' => $now, 'updated_at' => $now],
            ['parent_id' => 2, 'name' => 'Desktops', 'order' => 2, 'slug' => 'desktops', 'created_at' => $now, 'updated_at' => $now],
            ['parent_id' => null, 'name' => 'Mobile Phones', 'order' => 4, 'slug' => 'mobile-phones', 'created_at' => $now, 'updated_at' => $now],
            ['parent_id' => null, 'name' => 'Tablets', 'order' => 5, 'slug' => 'tablets', 'created_at' => $now, 'updated_at' => $now],
            ['parent_id' => 3, 'name' => 'TVs', 'order' => 1, 'slug' => 'tvs', 'created_at' => $now, 'updated_at' => $now],
            ['parent_id' => 3, 'name' => 'Digital Cameras', 'order' => 2, 'slug' => 'digital-cameras', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
