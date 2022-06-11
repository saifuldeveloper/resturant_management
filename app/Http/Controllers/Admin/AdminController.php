<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;

class AdminController extends Controller
{
    public function user(){
        $users=User::all();
        return view('admin.user',compact('users'));
    }
    public function deleteuser($id){
       
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
