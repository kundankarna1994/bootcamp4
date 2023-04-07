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
            @forelse($records as $model)
                <tr>
                    <td>{{$model->category->name}}</td>
                    <td>{{ $model->title }}</td>
                    <td>{{ $model->slug }}</td>

                    <td  class="d-flex justify-content-around w-25">
                        <a class="btn btn-info" href="{{ route("categories.edit",['category' => $model->id]) }}">Edit</a>
                        <form action="{{ route("categories.destroy",['category' => $model->id]) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No Records Found</td>
                </tr>
            @endforelse
        </table>
    </div>
@endsection
