@extends('layouts.app')


@section('content')
    <h1>{{$subject->name}}</h1>

   <span>{{$subject->ref}}</span>
    <span>{{$subject->name}}</span>
    <span>{{$subject->hours}}</span>
    <span>{{$subject->level}}</span>


    <h2>Students</h2>
    <ul>
        @foreach($subject->students as $student)
            <li>{{$student->name}}  {{$student->surname}}</li>
        @endforeach
    </ul>
@stop
