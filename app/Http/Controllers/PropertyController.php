<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PropertyController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }


    public function index()
    {
        $properties = Property::latest()->paginate(10);

        return view('properties.properties', [
            'properties' => $properties
        ]);
    }


    public function create(Request $request)
    {
        return view('properties.create');
    }


    public function store(Request $request)
    {

        // Validation
        $this->validate($request, [
            'title' => 'required',
            'area' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'price_label' => 'required',
            'status' => 'required',
            'type' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'lot_area' => 'required',
            'year_built' => 'required',
            'flooring' => 'required',
            'garage_size' => 'required',
            'roofling' => 'required',
            'parking' => 'required',
            'style' => 'required',
            'address' => 'required',
            'location' => 'required',
            'sub_location' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'video' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:1024',
        ]);


        // Image upload
        $newImageName = time() . '-' . $request->status . '.' .
            $request->image->extension();
        $request->image->move(public_path('img/properties/'), $newImageName);


        // Storing
       $request->user()->properties()->create([
            'title' => $request->title,
            'area' => $request->area,
            'desc' => $request->desc,
            'price' => $request->price,
            'price_label' => $request->price_label,
            'status' => $request->status,
            'type' => $request->type,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'lot_area' => $request->lot_area,
            'year_built' => $request->year_built,
            'flooring' => $request->flooring,
            'garage_size' => $request->garage_size,
            'roofling' => $request->roofling,
            'parking' => $request->parking,
            'style' => $request->style,
            'address' => $request->address,
            'location' => $request->location,
            'sub_location' => $request->sub_location,
            'long' => $request->long,
            'lat' => $request->lat,
            'video' => $request->video,
            'image' => $newImageName,
        ]);

        return redirect()->route('view-property');
    }


    public function show(Property $property, User $user)
    {
        $properties = Property::get();
        return view('properties.details', [
            'property' => $property,
            'properties' => $properties,
            'user' => $user
        ]);
    }


    public function edit(Property $property)
    {
        return view('properties.update', ['property' => $property]);
    }


    public function update(Request $request, Property $property)
    {

        // Validation
        $this->validate($request, [
            'title' => 'required',
            'area' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'price_label' => 'required',
            'status' => 'required',
            'type' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'lot_area' => 'required',
            'year_built' => 'required',
            'flooring' => 'required',
            'garage_size' => 'required',
            'roofling' => 'required',
            'parking' => 'required',
            'style' => 'required',
            'address' => 'required',
            'location' => 'required',
            'sub_location' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'video' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:1024',
        ]);

        // Updating
//        $property->update($request->all());


        // Delete old image
        $destination = 'img/properties/'.$property->image;
        if(File::exists($destination)) {
            File::delete($destination);
        }

        // Image upload
        $newImageName = time() . '-' . $request->status . '.' .
            $request->image->extension();
        $request->image->move(public_path('img/properties/'), $newImageName);


        $property->update([
            'title' => $request->title,
            'area' => $request->area,
            'desc' => $request->desc,
            'price' => $request->price,
            'price_label' => $request->price_label,
            'status' => $request->status,
            'type' => $request->type,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'lot_area' => $request->lot_area,
            'year_built' => $request->year_built,
            'flooring' => $request->flooring,
            'garage_size' => $request->garage_size,
            'roofling' => $request->roofling,
            'parking' => $request->parking,
            'style' => $request->style,
            'address' => $request->address,
            'location' => $request->location,
            'sub_location' => $request->sub_location,
            'long' => $request->long,
            'lat' => $request->lat,
            'video' => $request->video,
            'image' => $newImageName,
        ]);

        return redirect()->route('view-property');

    }


    public function destroy(Property $property)
    {
        $this->authorize('delete', $property);

        $property->delete();

        return back();
    }
}
