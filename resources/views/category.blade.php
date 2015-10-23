<?php
use App\product;
use App\product_category;
$setting=DB::table('settings')->take(1)->get();
?>
@extends('layouts.noslidelayout')

@section('title', 'Category')
@section('content')
<div class="maincontent-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest-product">
					<h2 class="section-title">Latest Products</h2>
					<div class="product-carousel">
						<?php $newpros = DB::table('products')->orderBy('created_at', 'desc')->take(10)->get()?>
						@foreach($newpros as $newpro)
						<div class="single-product">
							<div class="product-f-image">
								<img src="/img/{{$newpro->imagepath}}" alt="{{$newpro->name}}">
								<div class="product-hover">
									@if($setting!=null)
										@if($setting->activeCart==true)
									<a href="#" class="add-to-cart-link"><i
										class="fa fa-shopping-cart"></i> Add to cart</a>
										@endif
									@endif 
									<a
										href="{{url('product')}}/{{$newpro->id}}" class="view-details-link"><i
										class="fa fa-link"></i> See details</a>
								</div>
							</div>

							<h2>
								<a href="single-product.html">{{$newpro->name}}</a>
							</h2>

							<div class="product-carousel-price">
								<ins>$ {{$newpro->price-$newpro->discount}}</ins>
								<del>$ {{$newpro->price}}</del>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End main content area -->
<?php $allCate = DB::table('products')
						->join('product_categories','products.category','=','product_categories.id')
						->select('products.category','product_categories.name as name')->distinct()->get();
	?>
<div class="category-tab">
	<!--category-tab-->
	<div class="container">
		<ul class="nav nav-tabs">
		<?php
		$i = - 1;
		foreach ($allCate as $cate) {
			$i ++;?>
			<li <?php if($i==0) echo "class='active'"?>><a href="#<?php echo $cate->name?>" data-toggle="tab"><?php echo $cate->name?></a></li>
		<?php }?>
		</ul>
	</div>
	<div class="container">
		<?php $i = - 1;
		foreach ($allCate as $cate) {
			$i ++;
			$allPro = App\product::all()->where('category', $cate->category);
			?>
			<div class="tab-pane fade <?php echo ($i==0? "active":"")?> in" id="{{$cate->name}}">
				@foreach($allPro as $pro)
				<div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="/img/{{$pro->imagepath}}" alt="{{$pro->name}}">
								<h2>{{$pro->price}}</h2>
								<p>{{$pro->name}}</p>
								@if($setting!=null)
									@if($setting->activeCart==true)
								<a href="#" class="btn btn-default add-to-cart-link"><i
									class="fa fa-shopping-cart"></i> Add to cart</a>
									@endif
								@endif 
								<a href="{{url('product')}}/{{$newpro->id}}" class="btn btn-default view-details-link"><i
									class="fa fa-link"></i> See details</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		<?php }?>
	</div>
</div>
@endsection
