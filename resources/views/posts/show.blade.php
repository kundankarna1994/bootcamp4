@extends("layouts.default")

@section("content")
    <div class="post-container">
        <h1>{{ $model->title }}</h1>
        <p>{{$model->content}}</p>
    </div>

    <h5>Add a comment</h5>
    <form class="row g-3 needs-validation" action="{{route("comments.store")}}" method="POST">
        @csrf
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text"  class="form-control @error('name') is-invalid @enderror"  value="" name="name">
            @error("name")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Content</label>
            <textarea class="form-control @error('content') is-invalid @enderror">

            </textarea>
            @error("content")
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection
