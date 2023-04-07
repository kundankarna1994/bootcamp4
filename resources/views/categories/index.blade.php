@extends("layouts.default")

@section("content")
    <div class="categories-container mt-5">
        <a class="btn btn-primary" href="{{route("categories.create")}}">Add</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Posts</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($records as $model)
                <tr>
                    <td>{{ $model->title }}</td>
                    <td>{{ $model->slug }}</td>
                    <td>{{$model->posts_count}}</td>
                    <td  class="d-flex justify-content-around w-25">
                        <a class="btn btn-info" href="{{ route("categories.edit",['category' => $model->slug]) }}">Edit</a>
                        <form action="{{ route("categories.destroy",['category' => $model->slug]) }}" method="POST">
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
            </tbody>
        </table>
    </div>
@endsection
