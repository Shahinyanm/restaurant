<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Catalog;

class ProductController extends Controller
{
	public function newProduct(Request $request)
	{
		$this->validate($request,
		[
		'name'			=>	'required',
		'price'			=>	'required',
		'description'	=>	'required',
		'photo' 		=> 	'required|image|mimes:jpeg,png,jpg,gif,svg',	
		'weight'		=>	'required'
		// 'catalog_id'	=>  ''
		]);
		echo $request->input('catalog_name');
		$imageName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('uploads/products'), $imageName);
  //      	var_dump($request);
        

        $product = new Product([
            'name'			=>	$request->input('name'),
			'description'	=>	$request->input('description'),
			'price'			=>	$request->input('price'),
			'photo'			=>	$imageName,
			'weight'		=>	$request->input('weight'),
			'catalog_id'	=>  $request->catalog_name,
			'recomend'	=>  0,
			'status'		=>	0,
        ]);
        $catalog = Catalog::find($request->catalog_name);
        $catalog->products()->save($product);
        // $product->save();
	}    

	public function newCatalog(Request $request)
	{
		$this->validate($request, [
			'name'=> 'required'
		]);
		$catalog = new Catalog([
			'name'		=>	$request->name,
			'status' 	=>	0
		]);
		$catalog->save();
	}

	public function activeCatalog(Request $request){

		$catalog = Catalog::find($request->id);
		$catalog->status = 1;
		$catalog->save();

	}

	public function deActiveCatalog(Request $request){

		$catalog = Catalog::find($request->id);
		$catalog->status = 0;
		$catalog->save();

	}

	public function showCatalogProducts(Request $request){
		if($request->id == 0){
			$products = Product::where('catalog_id','=',$request->id)->get();
		}else{
			$products = Product::all();
		}
		return response()->json($products);

	}
}
