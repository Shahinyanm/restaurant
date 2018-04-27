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
//		echo $request->input('catalog_name');
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
			'recomend'	    =>  0,
			'status'		=>	0,
            'popular'		=>	0,
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
        $result = Catalog::all();
        return response()->json($result);
	}

	public function deActiveCatalog(Request $request){

		$catalog = Catalog::find($request->id);
		$catalog->status = 0;
		$catalog->save();
		$result = Catalog::all();
		return response()->json($result);

	}

	public function showCatalogProducts(Request $request){
		if(!$request->id == 0){
			$products = Product::where('catalog_id','=',$request->id)->get();
		}else{
			$products = Product::all();
		}
		return response()->json($products);

	}
    public function showCatalogs(){
	    $catalogs = Catalog::all();
	    return response()->json($catalogs);
    }

    public function  editProduct(Request $request){
        $this->validate($request,
              [
                'productName'			=>	'required',
                'productPrice'			=>	'required',
                'productDescription'	=>	'required',
                'productWeight'		    =>	'required',
               'productCatalogName'	    =>	'required',
              ]);
               if($request->input('status')=='on'){
                   $status = 1;
               }else{
                   $status=0;
               }
                if($request->input('popular')=='on'){
                    $popular = 1;
                }else{
                    $popular=0;
                }
                if($request->input('recomend')=='on'){
                    $recomend = 1;
                }else{
                    $recomend=0;
                }
        $catalog = Catalog::find($request->productCatalogName);
        $product =  Product::find($request->input("id"));

        $product->name          = $request->input('productName');
        $product->price         = $request->input('productPrice');
        $product->weight        = $request->input('productWeight');
        $product->description   = $request->input('productDescription');
        $product->status        = $status;
        $product->recomend      = $recomend;
        $product->popular       = $popular;

        if($request->hasFile('productPhoto')){
            $this->validate($request,[
                'productPhoto' =>    'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $imageName = time().'.'.$request->productPhoto->getClientOriginalExtension();
            $request->productPhoto->move(public_path('uploads/products'), $imageName);
            $product->photo = $imageName;
                }
                $catalog->products()->save($product);

    }

    public function  showModalProduct(Request $request){
        $product = Product::where('id','=', $request->input('id'))->get();
        return response()->json($product);
    }

    public function shopCard(Request $request){

            $products=$request->input();
            $data=[];
            foreach ($products as $key =>$value) {
                $data[]=Product::find(['id'=>$key]);
                // var_dump($data);
             }
             return response()->json($data);
    }


}
