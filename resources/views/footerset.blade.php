@extends('layouts.app')
@section('content2')
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
//disable last row deletion routine
                                    let minimumrows = $("button[value='minus']");
                                    if (minimumrows.length === 1) {
                                        minimumrows.prop("disabled", true);
                                    } else {
                                        minimumrows.prop("disabled", false);
                                    }
//disbale add over rows
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
