@extends('layout')
@section('title', 'About Us')
@section('content')
{{$guitar->id}}
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div>
            <h5>Guitar Name: {{$guitar->name}}</h5>
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <li>Guitar Brand: {{$guitar->brand}}</li>
            </div>
            <div>
                <li>Year Made: {{$guitar->year}}</li>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('guitars.edit', ['guitar'=>$guitar->id])}}">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection