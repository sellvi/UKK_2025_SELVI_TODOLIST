@extends('layouts.index')

@section('samyang')

<div>
    <h1>{{$data->nama}}</h1>

    <ul>
    @foreach($todo as $tasksatu)
        <li>{{$tasksatu->nama}}</li>
    @endforeach

    </ul>
</div>

    <h1>halaman detail</h1>
@endsection