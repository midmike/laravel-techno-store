<?php

use Illuminate\Database\Seeder;

class Product_CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\product_categories::class,5)->create();
    }
}
