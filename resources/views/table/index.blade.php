@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="padding: 50px">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div><br />
                    @endif
                    <div class="panel-heading" style="margin-bottom: 20px"> <a href="/crud/create" class="btn btn-success"> + Create</a></div>
                    <div class="panel-heading" style="margin-bottom: 20px"> <a href="/crud/load" class="btn btn-success"> + Load from link</a></div>
                    <div class="panel-body">
                        <table class="table" style="width: 100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td style="text-align:right;">
                                        <a href="/crud/{{ $item->id }}" class="btn btn-info">View</a>
                                        <a href="/crud/{{ $item->id }}/edit" class="btn btn-success">Edit</a>
                                        <form action="{{ url('/crud', ['id' => $item->id]) }}" method="post" style="display:inline-block">
                                            <input class="btn btn-danger" type="submit" value="Delete" />
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
