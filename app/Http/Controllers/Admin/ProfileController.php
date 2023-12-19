<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard.profile');
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $id = auth()->user()->id;
        $profile = $request->validated();

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatar_name = $id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads/avatars'), $avatar_name);
            $profile['avatar'] = $avatar_name;
        }

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $banner_name = $id . '.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('uploads/banners'), $banner_name);
            $profile['banner'] = $banner_name;
        }


      if($request->password){
          $profile['password'] = bcrypt($request->password);
        }else{
            unset($profile['password']);
        }

        


        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

}
