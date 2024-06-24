<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(20);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => 'required|in:coach,student',
            'phone' => ['string', 'max:255'],
            'kodemeli' => ['string', 'max:255'],
            'weight' => ['string', 'max:255'],
            'height' => ['string', 'max:255'],
        ]);

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'phone' => $request->phone,
            'kodemeli' => $request->kodemeli,
            'weight' => $request->weight,
            'height' => $request->height,
        ]);

        alert()->success('باتشکر','کاربر مورد نظر با موفقیت ساخته شد');
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'role' => 'required|in:coach,student',
            'phone' => ['string', 'max:255'],
            'kodemeli' => ['string', 'max:255'],
            'weight' => ['string', 'max:255'],
            'height' => ['string', 'max:255'],
        ]);

        if (! is_null($request->password)) {
            $request->validate([
                'password' => 'required|string|min:8',
            ]);

            $data['password'] = $request->password;
        }

        $user->update($data);

        alert()->success('باتشکر','کاربر مورد نظر با موفقیت ویرایش شد');
        return redirect()->route('admin.users.index');
    }
}
