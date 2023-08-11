<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        User::create($data);
        echo "success create user";
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB
        $data['password'] = Hash::make($request->password);

        // Update user
        User::update($data);
        echo "success update user";
    }

    public function delete($id)
    {
        // Tìm đến đối tượng muốn xóa
        $user = User::findOrFail($id);

        $user->delete();
        echo "success delete user";
    }

    public function index()
    {
        // lấy ra toàn bộ user
        $users = User::all();
        //dd($users);

        // trả về view hiển thị danh sách user
        return view('users.index', compact('users'));
    }
}
