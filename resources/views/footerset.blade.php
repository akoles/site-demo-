@extends('layouts.app')
@section('content')

    <div class="container">

    </div>
    <div class="card-header text-left">
        <div class="row align-items-center">
            <div class="col-md-11"> Menu Settings</div>
            <div class="col-md-1">
                <a class="btn btn-primary bg-warning float-end"
                   href="home" role="button">Back</a>
            </div>
        </div>
    </div>
    <form action="" method="post">
        @csrf
        @isset($data)
            @foreach( $data as $menu)
                <div class="input-group mb-3">
                    <span class="input-group-text">Tiltle:</span>
                    <input type="text" name="title" class="form-control" value="title">
                    <span class="input-group-text">Link:</span>
                    <input type="text" name="link" class="form-control" value="link">
                    <button type="button" class="btn bg-danger" value="minus">-</button>
                    <button type="button" class="btn bg-success" value="plus">+</button>

                    @endforeach
                    @endisset
                    <div class="d-grid gap-2">
                        <input type="submit" class="btn bg-info" value="Send">
                    </div>

    </form>

@endsection
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<form action="" method="post">
    @csrf
    @foreach( $data as $menu)
        <div class="input-group mb-3">
            <span class="input-group-text">Tiltle:</span>
            <input type="text" name="row[title][]" class="formcontrol"
                   value="<?=$menu->title?>">
            <form action="" method="post">
                @csrf
                @foreach( $data as $menu)
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tiltle:</span>
                        <input type="text" name="row[title][]" class="formcontrol"
                               value="<?=$menu->title?>">
                        @endsection
                        <script type="text/javascript">
                            $(document).on("click", "form", function (event) {
                                let obj = event.target;
                                if (obj.value === 'plus') { //make new row insertion
                                    obj = obj.closest('div');
                                    let clone_ = $(obj).clone();
                                    $(clone_).find("input").val("");
                                    clone_.insertAfter(obj);
                                }
                                if (obj.value === 'minus') { //make current row deletion
                                    let obj2 = obj.closest('div');
                                    $(obj2).remove();
                                }
                            });
                        </script>
                        <script type="text/javascript">
                            function set_enabled() {
                                let minimumrows = $("button[value='minus']");
                                if (minimumrows.length === 1) {
                                    minimumrows.prop("disabled", true);
                                } else {
                                    minimumrows.prop("disabled", false);
                                }
                                let maximurows = $("button[value='plus']");
                                if (maximurows.length === 10) {
                                    maximurows.prop("disabled", true);
                                } else {
                                    maximurows.prop("disabled", false);
                                }
                            }

                            $(document).ready(
                                function () {
                                    set_enabled();//set button’s state when page is loaded
                                }
                            );
                            $(document).on("click", "form", function (event) {
                                let obj = event.target;
                                if (obj.value === 'plus') { //make new row insertion
                                    obj = obj.closest('div');
                                    let clone_ = $(obj).clone();
                                    $(clone_).find("input").val("");
                                    clone_.insertAfter(obj);
                                }
                                if (obj.value === 'minus') { //make current row deletion
                                    let obj2 = obj.closest('div');
                                    $(obj2).remove();
                                }
                                set_enabled();
                            });
                        </script>
