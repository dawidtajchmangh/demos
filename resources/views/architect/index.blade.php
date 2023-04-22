@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')
    <div style="padding-left: 8%">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Architects</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('architect.create') }}"> Add New Architect</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($architects as $architect)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $architect->name }}</td>
                    <td>{{ $architect->email }}</td>
                    <td>{{ $architect->type }}</td>
                    <td>
                    

                            <a class="btn btn-info" href="{{ route('architect.show', $architect->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('architect.edit', $architect->id) }}">Edit</a>

                         
                            <a href="{{ route('architect.destroy', $architect->id) }}">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
