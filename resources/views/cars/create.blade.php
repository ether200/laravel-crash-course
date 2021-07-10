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
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="image">
                <input type="text" name="name" placeholder="Brand name">
                <input type="text" name="founded" placeholder="Founded">
                <input type="text" name="description" placeholder="Description">
                <button type="submit">
                    Create
                </button>
            </div>
        </form>

        {{-- We use the $errors globals and we loop thru em --}}

        @if($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif
    </div>


@endsection