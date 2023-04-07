@extends("layouts.default")

@section("content")
    <form class="row g-3 needs-validation">
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select a category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="invalid-feedback">

            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text" class="form-control " id="validationCustom01" value="" >
            <div class="invalid-feedback">

            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom01" class="form-label">Content</label>
            <textarea class="form-control">

            </textarea>
            <div class="invalid-feedback">

            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection
