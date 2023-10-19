@extends('layouts.app')
@section('content')
<a href="{{route('note.index')}}">Back</a>
    <form action="{{route('note.update', ['note' => $notes->id])}}" method="POST">
        @csrf
        @method('put')
        <label for="">Title</label>
        <input type="text" name="title" value="{{$notes->title}}"><br>
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <label for="">Description</label>
        <input type="text" name="description" value="{{$notes->description}}"><br>
        @error('description')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">Guardar</button>
    </form>
@endsection