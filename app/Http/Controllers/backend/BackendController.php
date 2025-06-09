<?php

namespace App\Http\Controllers\backend;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

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

    public function AdminUpdateProfile(Request $request){
        $id = Auth::user()->id;
        $admin = User::findOrFail($id);
        $admin->username = $request->username;
        $admin->email = $request->email;
        if($request->hasFile('profile_image')){
            $file = $request->file('profile_image');
            $imageName = "admin_".hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/images/profileImages'), $imageName);
            $imagePath = 'uploads/images/profileImages/'. $imageName;
            $admin->photo = $imagePath;
        }
        $admin->created_at = Carbon::now();
        $admin->save();

        $notification = [
            'message' => 'Profile Updated Erfolgreich!',
            'alert-type' => 'info'
        ];

        return redirect()->back()->with($notification);
    }

    public function AdminChangePassword(){

        return view('backend.pages.profile.password-edit');
    }

    public function AdminUpdatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => ['required','same:new_password']
        ]);
        $admin = User::find(Auth::user()->id);
        if(!Hash::check($request->old_password, $admin->password)){
            $notification = [
            'message' => 'Altes Password ist falsch!',
            'alert-type' => 'error'
        ];
            return redirect()->back()->with($notification);
        }

        $admin->password = Hash::make($request->new_password);
        $admin->save();

        $notification = [
            'message' => 'Passwort Erfolgreich geupdatet!',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);


    }
}