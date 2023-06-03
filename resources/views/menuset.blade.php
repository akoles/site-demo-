<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
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
        @foreach( $data as $menu)
            <div class="input-group mb-3">
                <span class="input-group-text">Tiltle:</span>
                <input type="text" name="title" class="form-control" value="title">
                <span class="input-group-text">Link:</span>
                <input type="text" name="link" class="form-control" value="link">
                <button type="button" class="btn bg-danger" value="minus">-</button>
                <button type="button" class="btn bg-success" value="plus">+</button>

        @endforeach
                <div class="d-grid gap-2">
                    <input type="submit" class="btn bg-info" value="Send">
                </div>

    </form>


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


