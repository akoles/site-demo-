@extends('layouts.app')
@section('content')
    @isset($convert)
        @foreach($convert as $k=>$v)
            <a><?=$k?></a>
            <a><?=$v['buy']?></a>
            <a><?=$v['sale']?></a>
        @endforeach
        @endisset
@endsection
