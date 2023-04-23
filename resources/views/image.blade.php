@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>image Upload </title>
    </head>

    <body>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="" style="width:50%; margin-left:50px;">
            @if(Auth::user()->type == "admin")
            <form action="{{ url('/image/admin') }}" method="POST" class="" enctype="multipart/form-data">
                @endif
                @if(Auth::user()->type == "architect")
                <form action="{{ route('add_image') }}" method="POST" class="" enctype="multipart/form-data">
                    @endif
                @csrf

                <label class="block mb-4">
                    <span class="sr-only">Choose File</span>
                    <input type="file" name="image"
                        class="form-control" />
                    @error('image')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                <textarea name="description" id="description"  class="form-control mb-4"" style="border:1px solid;" placeholder="description" cols="30" rows="10"></textarea>
                <textarea name="careAndCostEstimate" id="careAndCostEstimate"  class="form-control" style="border:1px solid;" placeholder="care and cost estimate" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>

    </body>

</html>
@endsection
