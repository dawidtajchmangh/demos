@extends('layouts.app')
@extends('layouts.sidebar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    You are a Architect User.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection