<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function new(Request $request)
    {
        //validate product
        $this->validate($request,[
            'name' => 'required|unique:products,name',
            'description' => 'required',
        ]);

        //create product
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        //explode the tags
        $tags = explode(',', $request->tags);
        foreach($tags as $tag){
            //find if tag already exists. If not create new tag.
            $existingTag = Tag::firstOrCreate(
                ['name' => $tag]
            );
            //attach tags to product.
            $product->tags()->attach($existingTag->id);
        }
        return redirect('/products')->with('status', 'Product created');
    }

   
    public function delete(Request $request)
    {
        //store
        $deleteProduct = Product::findOrfail($request->id);
        $deleteProduct->delete();


        // DB::delete("DELETE FROM products WHERE id = ".$request->id);

        return redirect('/products')->with('status', 'Product was deleted');
    }
}
