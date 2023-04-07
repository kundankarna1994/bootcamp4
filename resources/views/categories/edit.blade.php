@extends("layouts.default")

@section("content")
    <form class="row g-3 needs-validation" action="{{route("categories.update",['category' => $model->id])}}" method="POST">
        @csrf
        @method("PUT")
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text"  class="form-control @error('title') is-invalid @enderror"  value="{{ $model->title }}" name="title">
            @error("title")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection
