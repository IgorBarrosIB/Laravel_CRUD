<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraDev\Property;

class PropertyController extends Controller
{
    //$properties = DB::select('select * from properties');
    //$property = DB::select('select * from properties where name = ?',[$name]);
    //$title = $request->title; -- recuperando dados de variavel (VIEW)
    //DB::insert('insert into  properties values ( null, ?, ?, ?, ?)', [$title, $description, $retal_price, $sale_price]);
    /*
        $property = [
            $request->title,
            $propertySlug,
            $request->description,
            $request->retal_price,
            $request->sale_price,
            $id
        ];

        */
    //DB::update("update properties set title = ?, name = ?,  description = ?, retal_price = ?, sale_price = ?  where id = ?", $property);

    public function index(){

        $properties = Property::all();
        return view('property.index')->with('properties', $properties);

    }

    public function show($name){
        $property = Property::where('name', $name)->get();

        if(!empty($property)){
            return view('property.show')->with('property', $property);
        }else{
            return redirect()->action('PropertyController@index');
        }

    }

    public function create(){
      return view('property.create');
    }

    public function store(Request $request){

        $propertySlug = $this->setName($request->title);

        $property = [
            'title' => $request->title,
            'name' => $propertySlug,
            'description' => $request->description,
            'retal_price' => $request->retal_price,
            'sale_price' => $request->sale_price
        ];

        Property::create($property);
        return redirect()->action('PropertyController@index');
    }


    public function edit($name){
        $property = Property::where('name', $name)->get();

        if(!empty($property)){
            return view('property.edit')->with('property', $property);
        }else{
            return redirect()->action('PropertyController@index');
        }
    }

    public function update(Request $request, $id){
        $propertySlug = $this->setName($request->title);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->name = $request->name;
        $property->description = $request->description;
        $property->retal_price = $request->retal_price;
        $property->sale_price = $request->sale_price;

        $property->save();

        return redirect()->action('PropertyController@index');

    }

    public function destroy($name){

       $property = Property::where('name', $name)->get();

        if(!empty($property)){
            DB::delete("DELETE FROM properties WHERE name = ?", [$name]);
        }

        return redirect()->action('PropertyController@index');

    }

    private function setName($title){
        $propertySlug = str_slug($title);
        $properties = Property::all();
        $t=0;
        foreach($properties as $property){
            if(str_slug($property->title) === $propertySlug){
                $t++;
            }
        }

        if($t > 0){

            $propertySlug = $propertySlug . '-' . $t;

        }
        return $propertySlug;
    }
}
