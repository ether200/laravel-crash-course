@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1>
                Create car
            </h1>
        </div>
    </div>

    <div>
        <form action="/cars" method="POST">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Brand name">
                <input type="text" name="founded" placeholder="Founded">
                <input type="text" name="description" placeholder="Description">
                <button type="submit">
                    Create
                </button>
            </div>
        </form>
    </div>


@endsection