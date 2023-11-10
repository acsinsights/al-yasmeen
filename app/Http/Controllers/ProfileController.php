<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ImageResizer;
use Intervention\Image\ImageManagerStatic;

use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

use App\Models\User;


// use App\Models\User;
// use Illuminate\Support\Facades\File;
// use App\Http\Controllers\ImageResizer;
// use Illuminate\Support\Str;
//for profile img

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    protected function profile()
    {
        return view('admin.profile');
    }
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->save();

        return Redirect::route('admin.profile')->with('status', 'profile-updated');
    }



    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function image_update(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image'
        ]);



        if ($request->hasFile("profile_image")) {

            $profile_image_file = $request->file("profile_image");

            $image_name =   'user.' . time() . '.' . $profile_image_file->getClientOriginalExtension();
            $image_resize = ImageManagerStatic::make($profile_image_file->getRealPath());
            $image_resize->fit(300, 300);
            $image_resize->save(public_path('profile/' . $image_name));
        }

        $id = Auth::user()->id;
        $user = User::find($id);
        if ($user->profile_img) {
            $image_path = public_path('profile/' . $user->profile_img);

            if (is_file($image_path)) {
                unlink($image_path);
            }
        }
        $user->profile_img = $image_name;
        $user->save();
        return redirect()->back();
    }

    public function image_destroy()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        if ($user->profile_img) {
        }
        $image_path = public_path('profile/' . $user->profile_img);
        //    delete image from folder by core php
        if (is_file($image_path)) {
            unlink($image_path);
        }

        $user->profile_img = null;
        $user->save();
        return redirect()->back();
    }
}
