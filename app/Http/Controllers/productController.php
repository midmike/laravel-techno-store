<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\product;
use App\Http\Controllers\Controller;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {	
    	$product = new product();/* 
    	$product->name = 'Sony Smart TV - 2015';
    	$product->imagepath = 'img/product-1.jpg';
    	$product->price = 450.40;
    	$product->category = 12;
    	$product->discount = 12;
    	$product->save(); */
    	
    	$product->name = 'Apple new mac book 2015 March';
    	$product->imagepath = 'img/product-2.jpg';
    	$product->price = 450.40;
    	$product->category = 2;
    	$product->discount = 23;
    	$product->save();
    	$product = new product();
    	$product->name = 'Samsung gallaxy note 4';
    	$product->imagepath = 'img/product-6.jpg';
    	$product->price = 450.40;
    	$product->category = 5;
    	$product->discount = 12;
    	$product->save();
    	$product = new product();
    	$product->name = 'Apple new i phone 6';
    	$product->imagepath = 'img/product-3.jpg';
    	$product->price = 450.40;
    	$product->category = 12;
    	$product->discount = 5;
    	$product->save();
    	
    	/* $product->name = 'Sony playstation microsoft';
    	$product->imagepath = 'img/product-4.jpg';
    	$product->price = 450.40;
    	$product->category = 7;
    	$product->discount = 12;
    	$product->save(); */
    	
    	/* $product = new product();
    	$product->name = 'Sony Smart Air Condtion';
    	$product->imagepath = 'img/product-5.jpg';
    	$product->price = 450.40;
    	$product->category = 12;
    	$product->discount = 12;
    	$product->save(); */
    	/* 
        product::create( [ 
				'name' => ,
				'price' => '450.40',
				'category' => '12'
		] ); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
