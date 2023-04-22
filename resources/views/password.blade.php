@extends('layouts.sidebar')
@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


@section('content')

       
        <div class="col-lg-12 " style="padding-left: 10%">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


        <div class="row">
           
            <div class="col-md-12">
                <div class="col-lg-6 mb-30">
                    <div class="create_wrapper mw-100">
                        <h5 class="subtitle">Change Password</h5>
                        @if($errors->any())
                        {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
                        @endif
                        @if(Session::get('error') && Session::get('error') != null)
                        <div style="color:red">{{ Session::get('error') }}</div>
                        @php
                        Session::put('error', null)
                        @endphp
                        @endif
                        @if(Session::get('success') && Session::get('success') != null)
                        <div style="color:green">{{ Session::get('success') }}</div>
                        @php
                        Session::put('success', null)
                        @endphp
                        @endif
                        <form class="form" action="{{ route('postChangePassword') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="new_password" name="new_password">
                            </div>
                            <div class="mb-3">
                                <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                            </div>
                            <div class="create_form_group col-sm-6 align-self-end">
                                <button type="submit" class="btn btn-primary custom-button border-0">Save</button>
                            </div>                        </form>
                    </div>
                </div>
               </div>  </div>  </div>  
    @endsection