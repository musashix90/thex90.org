@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Trash</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td><a href="{{ Storage::url($post->featured_img) }}"><img src="{{ Storage::url($post->featured_img) }}" width="90px" height="50px"></a></td>
                                <td>{{ $post->title }}</td>
                                <td><a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-info">Edit</a></td>
                                <td><a href="{{ route('post.trash', ['id' => $post->id]) }}" class="btn btn-xs btn-danger">Trash</a></td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection