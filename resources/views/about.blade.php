{{-- Structure --}}

@if (5 > 10)
    <p>
        5 is lower than 10
    </p>
    @elseif( 5 == 10) 
    <p>
        5 is indeed lower than 10
    </p>
    @else 
    <h2>All conditions are wrong!</h2>
@endif

{{-- Unless is equal to !if, name is not empty --}}
@unless (empty($name))
    <h2>Name isn't empty</h2>
@endunless

{{-- Check if it's empty --}}
@empty($name)
    <h2>Name is empty</h2>
@endempty

{{-- Check if the variable has been set --}}
@isset($name)
    <h2>Name has been set</h2>
@endisset

{{-- Comparing multiple posible conditions
    Multiple values that may require the same code
--}}

@switch($name)
    @case('Ivan')
        <h2>Name is Ivan indeed!</h2>
        @break
    @case('John')
        <h2>Name is John indeed!</h2>
        @break
    @default
        <h2>There's not such name with that name</h2>
@endswitch

{{-- LOOPS:
        For loop
        Foreach loop
        For else loop
        While loop
    --}}

    {{-- @for ($i = 0; $i <= 10; $i++ )
        <h2>Value is: {{ $i }}</h2>
    @endfor --}}

    {{-- @foreach ($names as $singleName)
    <h2>Value is: {{ $singleName }}</h2>
    @endforeach --}}

    {{-- If names does not exist we can add an else statement with empty --}}
    @forelse ($names as $singleName)
        <h2>The name is : {{ $singleName }}</h2>
    @empty
        <h2>There are no names</h2>
    @endforelse

    {{-- {{  $i = 0 }}
    @while ($i < 10)
        <h2>{{ $i }}</h2>
        {{  $i++ }}
    @endwhile --}}



