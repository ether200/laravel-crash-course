@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1>
                Edit car
            </h1>
        </div>
    </div>

    <div>
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            {{-- IN HTML YOU CAN ONLY DO GET/POST use csrf and method to change it --}}
            @method('PUT');
            <div>
                <input type="text" name="name" placeholder="Brand name" value={{ $car->name }}>
                <input type="text" name="founded" placeholder="Founded" value={{ $car->founded }}>
                <input type="text" name="description" placeholder="Description" value={{ $car->description }}>
                <button type="submit">
                    Edit
                </button>
            </div>
        </form>
    </div>


@endsection