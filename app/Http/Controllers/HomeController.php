<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
  use App\Models\Message;
  use Illuminate\Support\Facades\Auth;
  use App\Models\User;
  use App\Models\Message1;
  use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function architectHome()
    {
        return view('architectHome');
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function messageuser()
    {
        $auth=Auth::user();
     $useremail=$auth->email;

        $message=Message::where('my_email','=',$useremail)
        ->where('type','=','Admin')->get();
        $message1=Message1::where('user_email','=',$useremail)
        ->where('type','=','Admin')->get();
        return view('message.messageuser',compact('message','message1'));
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
 
     public function sendmessageus(Request $request)
     {
        $auth=Auth::user();

        $data=new Message;
        $data->my_message=$request->my_message;
        $data->my_email=$auth->email;
        $data->type='Admin';

        $data->save();
        return redirect()->back();

     }

     public function messageadmin()
     {
        $message=Message::where('type','=','Admin')->get();
        return view('message.messageadmin',compact('message'));
     }

     public function view_user_all()
     {
        $user=user::where('type','=','0')->get();
        return view('message.view_user_send_message',compact('user'));
     }
     public function admin_reply(Request $request,$id)
     {
        
           $data=Message::find($id);
        $data->user_message=$request->user_message;
        $data->save();
       return redirect()->back()->with('message','successfully reply');
     }
     public function admin_send_message(Request $request,$id)
     {
        
      

        $auth=Auth::user();

        $user=User::find($id);

        $message=new Message1;
        $message->my_message=$request->my_message;
        $message->my_email=$auth->email;
        $message->user_email=$user->email;
        $message->type='Admin';

        $message->save();

       return redirect()->back()->with('message','successfully reply');
     }

     public function user_reply(Request $request,$id)
     {
        
           $data=Message1::find($id);
        $data->user_message=$request->user_message;
        $data->save();
       return redirect()->back()->with('message','successfully reply');
     }

     public function view_my_message()
     {
        $message=Message1::where('type','=','Admin')->get();
        return view('message.view_admin_my_message',compact('message'));
     }
     public function messagepage()
     {
      return view('message.userindex');
     }

     public function message_to_architect()
     {
      $auth=Auth::user();
     $useremail=$auth->email;

        $message=Message::where('my_email','=',$useremail)
        ->where('type','=','Architect')->get();
        $message1=Message1::where('user_email','=',$useremail)
        ->where('type','=','Architect')->get();

      return view('message.userarchitectsend',compact('message1','message'));
     }
     public function sendmessagearhitect(Request $request)
     {
  $auth=Auth::user();
  $data=new Message;
  $data->my_message=$request->my_message;
  $data->my_email=$auth->email;
  $data->type='Architect';

  echo($request);
       $image=$request->filenames;
       if (!is_null($image)) {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->filenames->move('image',$imagename);

        $data->filenames=$imagename;
       }

  $data->save();

        return redirect()->back();
     }

     public function Message_arhitect()
     {
      $message=Message::where('type','=','Architect')->get();

      return view('message.architectindex',compact('message'));
     }

     public function architect_view_user_all()
     {
        $user=user::where('type','=','0')->get();
        return view('message.architect_viewuser',compact('user'));
     }
     public function architect_view_my_message()
     {
        $message=Message1::where('type','=','Architect')->get();
        return view('message.architect_viewmy_message',compact('message'));
     }
     public function architect_send_message(Request $request,$id)
     {
        
      

        $auth=Auth::user();

        $user=User::find($id);

        $message=new Message1;
        $message->my_message=$request->my_message;
        $message->my_email=$auth->email;
        $message->user_email=$user->email;
        $message->type='Architect';

        $image=$request->filenames;
        if (!is_null($image)) {
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->filenames->move('image',$imagename);
     
         $message->filenames=$imagename;
      }
     
        $message->save();

       return redirect()->back()->with('message','successfully Send message');
     }
     public function view_calendar()
     {
      return view('admincalendar');
     }
     public function password()
     {
      return view ('password');
     }
     public function changePasswordSave(Request $request)
     {
         
         $this->validate($request, [
             'current_password' => 'required|string',
             'new_password' => 'required|confirmed|min:8|string'
         ]);
         $auth = Auth::user();
  
  
         if (!Hash::check($request->get('current_password'), $auth->password)) 
         {
             return back()->with('error', "Current Password is Invalid");
         }
  
 
         if (strcmp($request->get('current_password'), $request->new_password) == 0) 
         {
             return redirect()->back()->with("error", "New Password cannot be same as your current password.");
         }
  
         $user =  User::find($auth->id);
         $user->password =  Hash::make($request->new_password);
         $user->save();
         return back()->with('success', "Password Changed Successfully");
     }
}

