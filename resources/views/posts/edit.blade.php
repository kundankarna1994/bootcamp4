@extends("layouts.default")

@section("content")
    <form class="row g-3 needs-validation" action="{{route("categories.update",$model->id)}}" method="PUT">
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control is-invalid" id="validationCustom01" value="Mark" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
@endsection
