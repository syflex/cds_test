@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                    @endif

                    <div>
                        <a href="{{ url('page/create')}}" class="btn btn-primary">Add Page</a>
                    </div>


                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">heading</th>
                            <th scope="col">Content</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($page as $item)
                            <tr>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['title']}}</td>
                                <td>{{ substr($item['heading'],  0,  50) }}</td>
                                <td>{!! substr($item['content'],  0,  200) !!}</td>
                                <td>
                                    <a href="{{ route('page.edit', $item['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{route('page.update', $item->id)}}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type='submit' class="btn btn-danger btn-sm" >Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
