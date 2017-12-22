@extends('layouts.master')
@section('title')
  Single car
@endsection
@section('content')

    <p>Title: {{ $car->title }}</p>
    <p>Producer: {{ $car->producerid }}<p>
    <p>Number of doors: {{ $car->number_of_doors }}</p>


@endsection