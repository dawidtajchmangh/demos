<style>
.sidebar {
  height: 100%;
  width: 165px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

/* Style sidebar links */
.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

/* Style links on mouse-over */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Style the main content */
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

/* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The sidebar -->
<div class="sidebar">
  @if(Auth::user()->type == "admin")
  <a href="{{route('users.index')}}"><i class="fa fa-fw fa-user"></i> Users</a>
  <a href="{{url('/architects')}}"><i class="fa fa-fw fa-user"></i> Architect</a>
  <a href="{{url('/messageadmin')}}"><i class="fa fa-fw fa-user"></i> Message</a>
  <a href="{{route('view_calendar')}}"><i class="fa fa-fw fa-user"></i> Calendar</a>
  <a href="{{route('password')}}"><i class="fa fa-fw fa-user"></i> Change Password</a>

  
  @endif
  @if(Auth::user()->type == "architect" || Auth::user()->type == "admin")
  @if(Auth::user()->type == "architect")
  <a href="{{url('manager/home')}}"><h3 class="mb-4" style="color: white">Dashboard</h3></a>  

  <a href="{{route('index_image')}}"><i class="fa fa-fw fa-plus"></i> Add</a>
  <a href="{{url('/message_arhitect')}}"><i class="fa fa-fw fa-user"></i> Message</a>
  <a href="{{route('view_calendar')}}"><i class="fa fa-fw fa-user"></i> Calendar</a>

  @endif
  @if(Auth::user()->type == "admin")
  <a href="{{url('/image/admin')}}"><i class="fa fa-fw fa-plus"></i> Add</a>
  @endif
  @endif

</div>