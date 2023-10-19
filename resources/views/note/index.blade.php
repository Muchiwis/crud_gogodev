@extends('layouts.app')
@section('content')

<a href="{{route('note.create')}}">Create New</a>
    @if($notes->isEmpty())
        <p>Lista vacia</p>
    @else
        <ul>
            @foreach ($notes as $note)
            <li class="lista"><a href="{{route('note.show', ['note' => $note->id])}}"><h2>{{$note->title}}</h2></a> 
            <a href="{{route('note.edit', ['note' => $note->id])}}">|| Edit</a>
            <form action="{{route('note.destroy', ['note' =>$note->id ])}}" method="POST">
                @csrf
                @method('delete')
                <button type = "submit">Delete</button>
            </form>
            </li>
            @endforeach
        </ul>
    @endif
@endsection
