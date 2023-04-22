<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsereditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('type', 'admin')->latest()->paginate(5);

        return view('user.index', compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => ['required', 'string', 'min:8'],
        ]);


        $data = new User();
        $data->type = $request->type;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);

        $data->save();

        return redirect()->route('users.index')
            ->with('success', 'User Created Successfully.');
    }

    /**
     * Display the specified resource.
    
     */
    public function show(User $user)
    {

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.

     */
    public function edit(User $user)
    {
        if ($user->type == "architect") {
            return view('architect.edit', compact('user'));
        } else if ($user->type == "user") {
            return view('user.edit', compact('user'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'password' => ['string', 'min:8'],
        ]);
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);

        $data->save();

        return redirect()->route('users.index')
            ->with('success', 'User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User Deleted Successfully');
    }
}
