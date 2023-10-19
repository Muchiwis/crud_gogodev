@extends('layouts.app')
@section('content')
    <a href="{{route('note.index')}}">Back</a>
    <div class="title">
        <h3>{{$notes->title}}</h3>
    </div>
    <div class="description">
        <h3>{{$notes->description}}</h3>
    </div>
@endsection