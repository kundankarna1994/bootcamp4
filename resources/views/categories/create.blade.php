@extends("layouts.default")

@section("content")
    <form class="row g-3 needs-validation" action="{{route("categories.store")}}" method="POST">
        @csrf
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text" class="form-control " id="validationCustom01" value="">
            <div class="invalid-feedback">

            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection
