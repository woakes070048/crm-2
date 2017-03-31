<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;
use App\Task;
use App\Place;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Support\Facades\Input;
use Image;

class PersonController extends Controller
{

/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
    $people = Person::orderBy('last','asc')->paginate(10);
    return view('people.index', compact('people'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
    $person = new Person;
    $places = Place::pluck('name', 'id');
    return view('people.create', compact('person','places'));
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/

public function store(Request $request)
{
    $this->validate($request, array(
        'first' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'places' => 'array',
        ));
    $person = new Person($request->except(['places','image']));
    $person->name = $request->first . ' ' . $request->last;
    if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(160, 160)->save( public_path() . '\\media\\people\\'. $filename );
        $person->image = $filename;
    };
    $person->save();
    $places = $request->input('places', []);
    $person->places()->sync($places);
    return redirect()->route('people.index')
    ->with('success','Item created successfully');
}

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
    $person = Person::find($id);
    return view('people.show', compact('person'));
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
    $person = Person::find($id);
    //$places = Place::select(['name'])->get();
    $places = Place::pluck('name', 'id')->toArray();
    $selected = $person->places->pluck('id')->toArray();
    return view('people.edit', compact('person', 'places','selected'));
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $this->validate($request, array(
        'first' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'places' => 'array',
        ));
    $person = Person::find($id);
    $person->name = $request->first . ' ' . $request->last;
    $person->status = $request->status;
    $person->type = $request->type;
    $person->first = $request->first;
    $person->last = $request->last;
    $person->title = $request->title;
    $person->phone = $request->phone;
    $person->email = $request->email;
    $person->alt = $request->alt;
    $person->web = $request->web;
    $person->note = $request->note;
    if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(160, 160)->save( public_path() . '\\media\\people\\'. $filename );
        $person->image = $filename;
    };
    $person->update();
    $places = $request->input('places', []);
    $person->places()->sync($places);   
    return redirect()->route('people.index')
    ->with('success','Person updated successfully');
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
    Person::find($id)->delete();
    return redirect()->route('people.index')
    ->with('success','Person deleted successfully');
}
}