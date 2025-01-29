@extends('layouts.default')

@section('content')
<h2>Home Page</h2>
<p>Name: {{ $name }}</p>
<p>Age:
    @if($age > 18)
    {{ $age }}
    @else
    This person is too young.
    @endif
</p>
<p>Position: {{ $position }}</p>
<p>Address: {{ $address }}</p>
@stop
