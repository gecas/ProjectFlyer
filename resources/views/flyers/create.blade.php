
@extends('layout')


@section('content')
<h1 class="text-center">Selling house ? </h1>

@include('errors.list')



<form method="POST" action="/flyers" enctype="multipart/form-data">
@include('flyers.form')
</form>



@endsection