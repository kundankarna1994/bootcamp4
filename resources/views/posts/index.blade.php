@extends("layouts.default")

@section("content")
    <div class="posts-container mt-5">
        <a class="btn btn-primary" href="{{route("posts.create")}}">Add</a>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Comments</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Category Title</td>
                <td>Post Title</td>
                <td>Post Slug</td>
                <td>1</td>
                <td>Edit Delete</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
