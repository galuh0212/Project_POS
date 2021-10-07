<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data dummy user
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@seeder.com',
                'email_verified_at'=>now(),
                'level' => 'admin',
                'password' => bcrypt('passwordadmin')
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@seeder.com',
                'email_verified_at'=>now(),
                'level' => 'kasir',
                'password' => bcrypt('passwordkasir')
            ],
        ];

        $categories = [
            [
                'name_category' => 'Jacket',
            ],
            [
                'name_category' => 'Baju',
            ],
            [
                'name_category' => 'Celana',
            ],
        ];

        $products = [
            [
                'name_product' => 'Celana Chino',
                'description' => 'Model Baru',
                'stock' => 15,
                'price' => 150000,
                'category_id' => 3,
            ],
            [
                'name_product' => 'Jaket Levis',
                'description' => 'Model Baru',
                'stock' => 10,
                'price' => 180000,
                'category_id' => 1,
            ],
            [
                'name_product' => 'Kemeja',
                'description' => 'Model Baru',
                'stock' => 20,
                'price' => 100000,
                'category_id' => 2,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        foreach ($categories as $category){
            Category::create($category);
        }

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
