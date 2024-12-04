<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function index()
    {
        $title = 'Profile';
        $profile = profile::where('user_id', Auth::user()->id)
            ->select('id', 'first_name', 'image')
            ->first();
        return view('admin.profile.index', compact('title', 'profile'));
    }
    public function createProfile()
    {
        $title = 'Create Profile';
        return view('admin.profile.create', compact('title'));
    }
    public function storeProfile(Request $request)
    {
        //validate
        $this->validate($request, [
            'first_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // store image
        $image = $request->file('image');
        $image->storeAs('profile', $image->getClientOriginalName(), 'public');

        // get user login
        $user = Auth::user();

        // create data profile
        $user->profile()->create([
            'first_name' => $request->first_name,
            'image' => $image->getClientOriginalName()
        ]);



        return redirect()->route('profile')
            ->with(
                'success',
                'Profile has been created'
            );
    }
    public function editProfile()
    {
        $title = "Edit Your Information";
        $profile = profile::where('user_id', Auth::user()->id)
            ->select('id', 'first_name', 'image')
            ->first();

        // Mengembalikan tampilan edit dengan data profile
        return view('admin.profile.edit', compact("title", "profile"));
    }
    public function  updateProfile($id,Request $request)
    {
        // Validasi input
        $this->validate($request, [
            'first_name' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Mendapatkan pengguna yang sedang login
        $user = Auth::user();
        $profile = profile::findOrFail($id);

        // Cek apakah ada gambar yang diupload
        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($profile->image) {
                Storage::delete('profile' . basename($profile->image), 'public');
            }

            // Menyimpan gambar baru
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('profile', $imageName, 'public');

            // Memperbarui data profile
            $profile->update([
                'first_name' => $request->first_name,
                'image' => $imageName,
            ]);
        } else {
            // Jika tidak ada gambar baru, cukup perbarui nama depan
            $profile->update([
                'first_name' => $request->first_name,
            ]);
        }

        return redirect()->route('profile')->with('success', 'Your Profile has been Updated! 😊');
    }
    public  function changePassword()
    {
        $title = "Change Password";
        return  view('admin.profile.change', compact('title'));
    }

    public function updatePassword(Request $request)
    {
        //validate
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|min:4',
            'confirmation_password' => 'required|min:4'
        ]);
        //check current status
        $currentPasswordStatus = Hash::check(
            $request->current_password,
            auth()->user()->password
        );
        if ($currentPasswordStatus) {
            if ($request->password == $request->confirmation_password) {
                // Mendapatkan pengguna yang sedang login
                $user = auth()->user();
                // Memperbarui kata sandi
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->back()->with('success', 'password changed successfully! 😋');
            } else {
                return redirect()->back()->with('error', 'Password does not match! 😭');
            }
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect! 😠');
        }
    }
}
