@extends('administrator.layout')

@section('content')
    @foreach($modules as $module)
        <div class="ui icon header">
            <i class="circular question icon"></i>
            <a href="{{ $module }}">{{ $module }}</a>
        </div>
    @endforeach
@stop
