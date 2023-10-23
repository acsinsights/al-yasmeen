<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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


        $users = User::all();
        $request->user()->fill($request->validated());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }


        // if($request->hasFile('profile_img')){
        //     $filename = $request->profile_img->getClientOriginalName();
        //     $destinationPath = public_path('profile-img/');
        //     Auth()->user()->update(['profile_img'=>$filename]);
        // }

        // $users = User::all();
        // if ($request->hasFile("profile_img")) {
        //     $profile_img_file = $request->file("profile_img");
        //     $profile_img_image =  ImageResizer::resizeImage($profile_img_file, 300);
        //     $profile_img_name =time() . "_" . $profile_img_file->getClientOriginalName();
        //     $destinationPath = public_path('profile-img/');
        //     $profile_img_image->save($destinationPath . $profile_img_name);
        //       delete old image
        //       if (File::exists("profile-img/" . $users->profile_img))
        //        {
        //           File::delete("profile-img/" . $users->profile_img);
        //       }
        // }


      $request->user()->save();



            return Redirect::route('admin.profile')->with('status', 'profile-updated');
       





        // return Redirect::route('admin.integration.widgets')->with('status', 'updated');
    }


    //   public function tracking(ProfileUpdateRequest $request): RedirectResponse
    //   {
    //       $request->user()->save();
    //       return Redirect::route('admin.integration.tracking')->with('status', 'updated');
    //   }

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
}
