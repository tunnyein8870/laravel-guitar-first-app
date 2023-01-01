@extends('layout')
@section('content')
<div class="max-w-6xl">
    <form action="{{route('guitars.update', ['guitar' => $guitar->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{$guitar->name}}">
            @error('name')
            <div class="form-error text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="brand">Brand</label>
            <input type="text" id="brand" name="brand" value="{{$guitar->brand}}">
            @error('brand')
            <div class="form-error text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="year">Year Made</label>
            <input type="text" id="year" name="year" value="{{$guitar->year}}">
            @error('year')
            <div class="form-error text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection