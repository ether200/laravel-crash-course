@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-12">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold black.800">
            {{ $car->name }}
        </h1>
    </div>

    <div class="w-5/6 py-10">
        <div class="m-auto">
            <span class="upercase text-blue-500 font-bold text-xs italic">
                Founded: {{ $car->founded }}
            </span>

            <p class="text-lg text-gray-700">
                {{ $car->description }}
            </p>

            {{-- <ul>
                <p>
                    Models:
                </p>
                @forelse ($car->carModels as $carModel)
                    <li>
                        {{-- Since it's returning object you can not use -> but access thru key[] --}}
                        {{-- {{ $carModel['model_name'] }}
                    </li>
                @empty
                    <p>
                        No models found.
                    </p>
                @endforelse
            </ul> --}}

            <table>
                <tr>
                    <th>
                        Model
                    </th>
                    <th>
                        Engines
                    </th>
                    <th>
                        Date
                    </th>
                </tr>

                @forelse ($car->carModels as $model)
                    <tr>
                        <td>
                            {{  $model->model_name }}
                        </td>

                        <td>
                            @foreach ($car->engines as $engine)
                                @if ($model->id == $engine->model_id)
                                {
                                    {{ $engine->engine_name }}
                                }
                                @endif
                            @endforeach
                        </td>

                        <td>
                            {{ date('d-m-Y', strtotime($car->productionDate->created_at)) }}
                        </td>
                    </tr>
                @empty
                    <p>
                        No car models found
                    </p>
                @endforelse
            </table>

            <p>
                Product type:
                @forelse ($car->products as $product)
                    {{ $product-> name  }}
                @empty
                    No car products description
                @endforelse
            </p>

            <hr class="mt-4 mb-8">
        </div>
    </div>
</div>
@endsection()