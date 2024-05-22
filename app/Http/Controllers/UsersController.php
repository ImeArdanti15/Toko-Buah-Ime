<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view('user.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            $data = $request->only([
                'name',
                'email',
                'password',
                'role'
            ]);
            User::create($data);
            return view('user.index', [
                'status' => 'simpan',
                'pesan' => 'The new user data with the name "'. $request->name . '" has been sucessfully saved!',
                'pengguna' => User::all()
            ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengguna = User::find($id);
        return view('user.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255|unique:users,name,' . $user->id . ',id',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id . ',id',
            'password' => 'nullable|string|min:8',
            'role' => 'required|string|in:admin,owner',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
