<?php

namespace App\Http\Controllers;

use App\ProducSimulate;
use App\ProducUser;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class ProducUserController extends Controller
{
    //
     //
     public function index()
     {
        $products = ProducUser::all();
        $array=[];
        $products->toArray();
        // foreach($products as $product){
        //     echo $product->productName;
        //      response()->json(['success'=>$product->productName,

        //     ]);
        // }
        return response()->json($products);
        // echo $products->productName;
     }
     public function sell(Request $request)
     {
         # code...
     }
     public function buy(Request $request)
     {

        $products = ProducSimulate::where('id',"=",$request->productsimulateID)->get();
        $arrayproduct=array();
        foreach ($products as $product) {
         echo $product->productID;
        }
        $products->toArray();
        // foreach($products as $product){
        //     echo $product->productName;
        //      response()->json(['success'=>$product->productName,

        //     ]);
        // }
        return response()->json();
         # code...
     }
     public function create()
     {

     }
     public function store(Request $request)
     {
         echo 'store';
     }
     public function show($id)
     {
         echo 'show';
     }
     public function edit($id)
     {
         echo 'edit';
     }
     public function update(Request $request, $id)
     {
         echo 'update';
     }
     public function destroy($id)
     {
         echo 'destroy';
     }
}
