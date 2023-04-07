@extends("layouts.default")

@section("content")
    <div class="categories-container mt-5">
        <a class="btn btn-primary" href="{{route("categories.create")}}">Add</a>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Posts</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Category Title</td>
                <td>Category Slug</td>
                <td>1</td>
                <td>Edit Delete</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
