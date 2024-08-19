<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AdminUserController extends Controller
{
    public function index(){
        // Mendapatkan semua pengguna yang bukan admin
        $users = User::where('is_admin', false)->get();

        return view('admin/users', compact('users'));
    }

    public function updateApprove($id){
        $user= User::find($id);
        $user->is_approved = true;
        $user->save();

        toastr()->closeButton()->addSuccess('User approved successfully!');
        return redirect()->back();

    }
}
