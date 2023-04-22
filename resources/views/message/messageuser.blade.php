@extends('layouts.userside')
@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


@section('content')
<style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #7b90f5;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
<style>
   
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}

}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #0062cc;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
    </style>
       
        <div class="col-lg-12">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                
            </div>
            <form class="mb-5" method="post" action="{{route('sendmessageus')}}">
             @csrf
                
               <div class="row">
              
                    <div class="col-md-6">
                    <h3>Drop Us a Message</h3>
                        <div class="form-group">
                            <textarea name="my_message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                </div>
            </form>
</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  
                    <div class="card-body">
                    <h1> My Message </h1>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="table-wrapper ">
                  <table class="styled-table table-hover table-bordered" id="myTable">
                      <thead>
                            <tr>
                                <th style="width:5%">No</th>
                                <th style="width:10%">Message</th>
                                <th style="width:10%">Reply</th>
                                <th style="width:10%">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($message as $key=>$message)
                                <tr>
                                    <td> {{ ++$key}}</td>
                                    <td>{{ $message->my_message }}</td>
                                    <td>{{ $message->user_message }}</td>
                                    <td>
                             
                                        @if ($message->user_message == '')
                                        <p style="color: green;">Not Reply</p>
    
                                    @else
                                        <p style="color: green;">Successfully </p>
                                    @endif
                                    </td>
                             
                                </tr>
                                @endforeach
    
                        </tbody>
                    </table>
                </div>
                </div> 
                <div class="card-body">
                    <h1> Receive Message </h1>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="table-wrapper ">
                  <table class="styled-table table-hover table-bordered" id="myTable">
                      <thead>

                            <tr>
                                <th style="width:5%">No</th>
                                <th style="width:10%">Message</th>
                                <th style="width:10%">Reply</th>
                                <th style="width:10%">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($message1 as $key=>$message1)

                                <tr>
                                    <td> {{ ++$key}}</td>
                                    <td>{{ $message1->my_message }}</td>
                                    <td>{{ $message1->user_message }}</td>
                                    <td>
                             
                                        @if ($message1->user_message == '')
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{ $message1->id }}" >Reply</button>
    
                                    @else
                                        <p style="color: green;">Already Reply </p>
                                    @endif
                                    </td>
                             
                                </tr>
                                <div class="modal fade" id="exampleModal{{ $message1->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Reply message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="{{ route('user_reply',$message1->id) }}" method="POST">
                                            @csrf
                                          
                                            <div class="form-group">
                                              <label for="message-text" class="col-form-label">Message:</label>
                                              <textarea class="form-control" name="user_message" id="message-text"></textarea>
                                            </div>
                                          
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Send Message</button>
                                        </div>
                                    </form>
                                      </div>
                                    </div>
                                  </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div> 
            </div>
            </div>
        </div>
    
      </div>
    </div>
      <script>
        // Basic example
    $(document).ready(function () {
      $('#myTable').DataTable({
        "paging": false // false to disable pagination (or any other option)
      });
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
    @endsection