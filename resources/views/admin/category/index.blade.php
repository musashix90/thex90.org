@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
        <th>
            Category name
        </th>
        <th>
            Editing
        </th>
        <th>
            Deleting
        </th>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        <a href="{{ route('category.edit') }}" class="btn btn-xs btn-info">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
