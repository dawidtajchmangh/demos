<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ArchitecteditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $architects = user::where('type', 2)->latest()->paginate(5);

        return view('architect.index', compact('architects'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('architect.create');
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
            'email' => 'required',
            'password' => ['required', 'string', 'min:8'],
        ]);


        $data = new User();
        $data->type = 2;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);

        $data->save();
        return redirect()->route('architect.index')
            ->with('success', 'Architect Added successfully.');
    }

    /**
     * Display the specified resource.
     *
  
     */
    public function show(User $architect, $id)
    {
        $architect = User::find($id);
        return view('architect.show', compact('architect'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(User $architect, $id)
    {
        $architect = User::find($id);
        return view('architect.edit', compact('architect'));
    }

    /**
     * Update the specified resource in storage.
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

        return redirect()->route('architect.index')
            ->with('success', 'Architect Updated Successfully');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('architect.index')
            ->with('success', 'Architect Deleted Successfully');
    }
}
