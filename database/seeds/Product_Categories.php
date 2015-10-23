<?php

use Illuminate\Database\Seeder;

class Product_Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\product_categories::class,10)->create();
    }
}
