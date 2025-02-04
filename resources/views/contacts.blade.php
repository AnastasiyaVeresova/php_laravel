@extends('layouts.default')

@section('content')
<h2>Contacts Page</h2>
<p>Address: {{ $address }}</p>
<p>Post Code: {{ $post_code }}</p>
<p>Email:
    @if($email)
    {{ $email }}
    @else
    Адрес электронной почты не указан
    @endif
</p>
<p>Phone: {{ $phone }}</p>
@stop
