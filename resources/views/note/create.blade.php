@extends('layouts.app')
@section('content')
<a href="{{route('note.index')}}">Back</a>
    <form action="{{route('note.store')}}" method="post">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title"><br>
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="">Description</label>
        <input type="text" name="description"><br>
        @error('description')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">Guardar</button>
    </form>
@endsection