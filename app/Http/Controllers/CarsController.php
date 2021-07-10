<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Product;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    // RETRIEVE DATA

    {
        // SELECT * FROM cars
        $cars = Car::all();
        //$cars = Car::all()->toArray() | toJson()

        // GET SPECIFIC
        // If it doesn't exist thanks to firstOrFail it will throw a 404 page
        // $cars = Car::where('name', '=', 'audi')->firstOrFail();

        // it breaks the query in chunks
        // $cars = Car::chunk(2, function ($cars) {
        //     foreach($cars as $car) 
        //         print_r($car);
        // });

        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Adding an instance of custom request instead
    public function store(Request $request)
    {
        // Since we're creating we need to use store method
        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // Unless you use the save method, the instance won't save in db
        // $car->save();

        # Validate value from input
        // $request->validate([
        //     # check if name already exist
        //     # can use two ways
        //     'name' => ['required'], ['unique:cars'],
        //     # use custom rule
        //     // 'name' => new Uppercase,
        //     # check for integer and add min and max
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required'
        // ]);

        // $request->validated();

        # Validate FOR IMAGE UPLOAD

        # Methods we can use on the request
        //guessExtension() -> SHOWS the extension of the file
        // getMimeType() -> SHOWS type and extension file/jpeg
        // store()
        // asStore()
        // storePublicly
        // move()
        // getClientOriginalName() -> returns current file name
        // getClientMimeType -> same as getMimeType
        // getSize -> Current size in kb
        // getError() -> 0 if it's false
        // isValid() -> same as error but true or false

        // $test = $request->file('image')->guessExtension();

        $request->validate([
            'name' => 'required',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        # Format image's file name and then store
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName); // return info like path file name etc


        # If it's valid it will proceed
        # If it's not valid, it will throw ValidationException and redirect to previous page

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        $products = Product::find($id);
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find returns an array, with first we get the object out of it
        $car = Car::find($id)->first();
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateValidationRequest $request, $id)
    {

        # To avoid code repetition we replaced request to our custom request with rules
        $request->validated();

        $car = Car::where('id', $id)->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::where('id', $id)->first();

        $car->delete();

        return redirect('/cars');
    }
}
