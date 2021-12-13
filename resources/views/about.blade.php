{{-- @if (5 > 10)
    <p>5 is lower than 10</p>    
@else
    <p>grater</p>
@endif
@unless (empty($name))
    <h2>Name isn't empty</h2>
@endunless

@empty($name)
    <h2>Name is empty</h2>
@endempty

@isset($name)
    <h2>Name has been seet</h2>
@endisset --}}

{{-- Comparing multiple possible conditions 
    Multiple values that may require the same code --}}

{{-- @switch($name)
    @case('tom')
        <h2>Name is tom</h2>
        @break
    @case('jon')
        <h2>Name is jon</h2>
        @break
    @default
        <h2>Name doesn't exist</h2>
@endswitch --}}


@for ($i = 0; $i <= 10; $i++)
    {{ $i }}
@endfor

@foreach ($data as $item)
    {{ $item }}
@endforeach

@forelse ($data as $item)
<h2>The name is </h2>{{ $item }}
@empty
    <h2>The name is empty</h2>
@endforelse


{{ $i = 0 }}
@while ($i < 10)
    {{ ++$i }}
@endwhile
