<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{

    use FileUploadTrait;
    public function index(): View
    {
        $user = User::find(auth()->user()->id);
        return view('admin.dashboard.profile', compact('user'));
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
       $request->validated();

        $oldAvatar = $request->old_avatar ?? null;
        $oldBanner = $request->old_banner ?? null;

        $avatarPath = $this->uploadImage($request, 'avatar', $oldAvatar);
        $bannerPath = $this->uploadImage($request, 'banner', $oldBanner);

        $user =   User::find(auth()->user()->id);

        $user->avatar     = !empty($avatarPath) ? $avatarPath :  $oldAvatar;
        $user->banner     = !empty($bannerPath) ? $bannerPath :  $oldBanner;
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->about      = $request->about;
        $user->website    = $request->website;
        $user->address    = $request->address;
        $user->phone      = $request->phone;
        $user->fb_link    = $request->fb_link;
        $user->x_link     = $request->x_link;
        $user->intra_link = $request->intra_link;
        $user->in_link    = $request->in_link;
        $user->password   = $oldPassword;

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        );

        $user = User::find(auth()->user()->id);

        if(!password_verify($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'Old password does not match.');
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
