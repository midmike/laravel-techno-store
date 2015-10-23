<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\product::class, function ($faker) {
    $collection = collect([10,20,50,200,500,800,600]);
    $collec_discount = collect([10,20,50,25,87,80,60]);
    $collec_discount = collect([1,2,3,4,5]);
    $coll_image = collect([1,2,3,4,5]);
    return [
        'name' => str_random(5),
        'imagepath' => "product-".$coll_image->random().".jpg",
        'description' => "product-sample-descriptoin-".$coll_image->random(),
        'price' => $collection->random(),
        'discount' => $collec_discount->random(),
        'category' => $collec_discount->random()
    ];
});
$factory->define(App\product_categories::class, function ($faker) {
    return [
        'name' => str_random(5),
    ];
});