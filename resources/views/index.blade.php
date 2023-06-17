@extends('layouts.app')

@section('content')
    @include('converter')
    @if (isset($content))
        @foreach( $content as $d)
            <p><?=$d->content?></p>
        @endforeach
    @endif
@endsection


