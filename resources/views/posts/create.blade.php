@extends("layouts.default")

@section("content")
    <form class="row g-3 needs-validation" action="{{route("posts.store")}}" method="POST">
        @csrf
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Category</label>
            <select class="form-select  @error('category_id') is-invalid @enderror" aria-label="Default select example">
                <option selected>Select a category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            @error("category_id")
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text"  class="form-control @error('title') is-invalid @enderror"  value="" name="title">
            @error("title")
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
