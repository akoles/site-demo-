<!doctype html>
<html lang="en">
<head>

    @include('menu')
    <div style="height; 100px"> "</div>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-9"><h4>Title settings</h4></div>
                                    <div class="col-3 d-grid">
                                        <a href="titlesets" class="btn btn-info" role="button">Edit</a>
                                    </div>
                                </div>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-9"><h4>Menu settings</h4></div>
                                    <div class="col-3 d-grid">
                                        <a href="menusets" class="btn btn-info" role="button">Edit</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-9"><h4>Footer settings</h4></div>
                                    <div class="col-3 d-grid">
                                        <a href="footerset" class="btn btn-info" role="button">Edit</a>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
