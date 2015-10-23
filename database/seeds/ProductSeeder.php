<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table("product_categories")->insert([
        //    'name'=>str_random(5)
        // ]);
        factory(App\product::class,5)->create()->each(function ($product) {
            //$product->category()->save(factory(App\product_categories::class)->make()); 
        });
    }
}
