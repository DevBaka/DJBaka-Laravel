<?php

namespace App\Http\Controllers\backend;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class BackendController extends Controller
{
    public function AdminLogout(Request $request): RedirectResponse{
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function AdminEditProfile(){
        $admin = User::find(Auth::user()->id);
        return view('backend.pages.profile.profile-edit', compact('admin'));
    }

}
