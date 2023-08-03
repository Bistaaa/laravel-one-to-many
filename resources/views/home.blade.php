@extends('layouts.app')

@section('content')

    <div class="container text-center pt-5">
        <h1>Hello, World!</h1>
        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('project.show', $project -> id ) }}">
                            {{$project -> name}}
                    </a>{{ $project -> name }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection