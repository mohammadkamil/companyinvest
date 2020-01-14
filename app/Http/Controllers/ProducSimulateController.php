<?php

namespace App\Http\Controllers;

use App\ProducSetAdmin;
use App\ProducSimulate;
use App\ProducUser;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ProducSimulateController extends Controller
{
    //
    public function index()
    {
        $arrayid=array(5,7,8,9);
        for($loop=0;$loop<sizeof($arrayid);$loop++){

        }
        $products = ProducSimulate::all();
        $array=[];
        $products->toArray();
        // foreach($products as $product){
        //     echo $product->productName;
        //      response()->json(['success'=>$product->productName,

        //     ]);
        // }
        return response()->json($products);    }
    public function create()
    {
        // ProducSetAdmin::truncate();
        ProducSimulate::query()->delete();
        ProducUser::query()->delete();

        $products = ProducSetAdmin::all();
        foreach ($products as $product) {
            $productSimulate = new ProducSimulate;
            $productSimulate->productID = $product->productID;
            $productSimulate->productName = $product->productName;
            $productSimulate->productPrice = $product->productPrice;
            $productSimulate->userID = $product->userID;
            $productSimulate->quantity = $product->quantity;
            $productSimulate->save();
            // echo $product->productName;
        }
        $productuser = ProducSetAdmin::where('userID', 5)->get();
        foreach ($productuser as $product) {
            $productusers = new ProducUser;
            $productusers->productID = $product->productID;
            $productusers->productName = $product->productName;
            $productusers->productPrice = 0;
            $productusers->userID =0;
            $productusers->quantity = rand(0,50);
            $productusers->save();
        }
        return view('welcome');
    }
    public function getCompany()
    {
        # code...
        $arrayid=array(5,7,8,9);
        $collection= new Collection($arrayid);

        $arrayid=$collection->shuffle()->all();
        $array=[];
        for($loop=0;$loop<sizeof($arrayid);$loop++){
            $products = ProducSimulate::where('userID','=',$arrayid[$loop])->get();
            $products->toArray();
            array_push($array,$products);
        }
        // $collection= new Collection($array);

        // foreach($products as $product){
        //     echo $product->productName;
        //      response()->json(['success'=>$product->productName,

        //     ]);
        // }
        return response()->json($array);
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
