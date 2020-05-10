<?php

use Illuminate\Database\Seeder;
use App\Product;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Laptops
        for ($i=1; $i <= 30; $i++) {
            Product::create([
                'brand_id' => 1,
                'name' => 'Laptop '.$i,
                'slug' => 'laptop-'.$i,
                'sku' => 'LP-'.$i,
                'short_description' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
                'price' => rand(1499.99, 2499.99),
                'full_description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'color' => 'green',
                'stock' => 20,
                'image' => 'products/dummy/laptop-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(4);
        }

        // Desktops
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'brand_id' => 1,
                'name' => 'Desktop ' . $i,
                'slug' => 'desktop-' . $i,
                'sku' => 'DK-'.$i,
                'short_description' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
                'price' => rand(2499.99, 4499.99),
                'full_description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'color' => 'red',
                'stock' => 10,
                'image' => 'products/dummy/desktop-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(5);
        }

        // Phones
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'brand_id' => 1,
                'name' => 'Phone ' . $i,
                'slug' => 'phone-' . $i,
                'sku' => 'PH-'.$i,
                'short_description' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
                'price' => rand(799.99, 1499.99),
                'full_description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'color' => 'silver',
                'stock' => 10,
                'image' => 'products/dummy/phone-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(6);
        }

        // Tablets
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'brand_id' => 1,
                'name' => 'Tablet ' . $i,
                'slug' => 'tablet-' . $i,
                'sku' => 'TB-'.$i,
                'short_description' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [10, 11, 12][array_rand([10, 11, 12])] . ' inch screen, 4GHz Quad Core',
                'price' => rand(499.99, 1499.99),
                'full_description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'color' => 'yellow',
                'stock' => 10,
                'image' => 'products/dummy/tablet-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(7);
        }

        // TVs
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'brand_id' => 1,
                'name' => 'TV ' . $i,
                'slug' => 'tv-' . $i,
                'sku' => 'TV-'.$i,
                'short_description' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Smart TV, 4K',
                'price' => rand(799.99, 1499.99),
                'full_description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'color' => 'blue',
                'stock' => 10,
                'image' => 'products/dummy/tv-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(8);
        }

        // Cameras
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'brand_id' => 1,
                'name' => 'Camera ' . $i,
                'slug' => 'camera-' . $i,
                'sku' => 'CM-'.$i,
                'short_description' => 'Full Frame DSLR, with 18-55mm kit lens.',
                'price' => rand(799.99, 2499.99),
                'full_description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'color' => 'yellow',
                'stock' => 10,
                'image' => 'products/dummy/camera-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(9);
        }

        // Appliances
        for ($i = 1; $i <= 9; $i++) {
            Product::create([
                'brand_id' => 1,
                'name' => 'Appliance ' . $i,
                'slug' => 'appliance-' . $i,
                'sku' => 'AP-'.$i,
                'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799.99, 1499.99),
                'full_description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'color' => 'yellow',
                'stock' => 10,
                'image' => 'products/dummy/appliance-'.$i.'.jpg',
                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
            ])->categories()->attach(1);
        }

        // Select random entries to be featured
        Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 73, 80])->update(['featured' => true]);
    }
}
