<?php

namespace App\Http\Controllers\Api;

use App\Events\Api\Registered;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('profile');

        return UserResource::collection($user->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        event(new Registered($this->create($request->validated())));

        return response()->json([
            'status'    => true,
            'message'   => 'User Has Been Created',
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with(['profile', 'products'])
            ->find($id);

        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        User::find($id)->update(request()->all());

        return response()->json([
            'status'    => true,
            'message'   => 'User Has Been Update'
        ], 201);
    }

    /**
     * Create User After Validate Is Success
     * @param array $user
     * @return App\User
     */
    protected function create(array $user)
    {
        return User::create([
            'name'      => $user['name'],
            'email'     => $user['email'],
            'password'  => Hash::make($user['password']),
        ]);
    }
}
