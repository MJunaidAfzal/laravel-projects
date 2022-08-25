<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;

class FactoryController extends Controller
{
    public function index(){
        $factories = Factory::get();
        return view('factories.index',compact('factories'));
    }

    public function create(){
        return view('factories.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191|unique:factories,name',
            'price' => 'required|unique:factories,price',
            'year' => 'required|unique:factories,year',
            'speed' => 'required|unique:factories,speed',
            'status' => 'required'

        ]);
        $store = Factory::create([
            'name' => $request->name,
            'price' => $request->price,
            'year' => $request->year,
            'speed' => $request->speed,
            'status' => $request->status,
        ]);

        if(!empty($store->id)){
            return redirect()->route('factories.index')->with('success','Car Added');
        }
        else{
            return redirect()->route('factories.create')->with('error','Something went wrong');
        }

    }

    public function edit($id){
        $factory = Factory::where('id',$id)->first();
        return view('factories.edit',compact('factory'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:191|:factories,name'.$id ,
            'price' => 'required|:factories,price' .$id,
            'year' => 'required|:factories,year' .$id,
            'speed' => 'required|:factories,speed' .$id,
            'status' => 'required'
        ]);

        $update = Factory::where('id',$id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'year' => $request->year,
            'speed' => $request->speed,
            'status' => $request->status,
        ]);

        if($update > 0){
            return redirect()->route('factories.index')->with('success','Factory Updated');
        }
        return redirect()->route('factories.edit', $id)->with('error','Something Went Wrong');

    }

    public function delete($id){
        $factory = Factory::where('id',$id)->first();
        if(!empty($factory)){
            $factory->delete();
            return redirect()->route('factories.index')->with('success','Factory Deleted');
        }
        return redirect()->route('factories.index')->with('error','Record Not Found');


    }
}
