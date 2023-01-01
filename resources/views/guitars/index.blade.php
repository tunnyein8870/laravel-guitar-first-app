@extends('layout')
@section('title', 'About Us')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        {{$guitars->links()}}

        @foreach($guitars as $guitar)
        <div>
            <h4>Guitar Name: {{$guitar->name}}</h4>
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <li>Guitar Brand: {{$guitar->brand}}</li>
            </div>
            <div>
                <li>Year Made: {{$guitar->year}}</li>
            </div>
            <div>
            <li><a href="{{route('guitars.show', ['guitar' => $guitar['id']])}}">View Detail</a></li>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection