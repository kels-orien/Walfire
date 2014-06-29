@extends('administrator.layout')

@section('content')
    <h2>Gene</h2>
    <h2>Active other module:</h2>
    @foreach($modules as $module)
        <div class="ui icon header">
            <a href="{{ $module }}">{{ $module }}</a>
        </div>
    @endforeach
@stop
