<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfilePasswordUpdateRequest;
use App\Http\Requests\Frontend\ProfileUpdateRequest;
use App\Traits\FileUploadTrait;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    use FileUploadTrait;
    public function index(): View
    {
        $user = auth()->user();
        return view('Frontend.dashboard.profile.index', compact('user'));
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->validated();

        $user = Auth::user();


        $oldAvatar = $request->old_avatar ?? null;
        $oldBanner = $request->old_banner ?? null;

        $avatarPath = $this->uploadImage($request, 'avatar', $oldAvatar);
        $bannerPath = $this->uploadImage($request, 'banner', $oldBanner);

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

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');


    }

    function updatePassword(ProfilePasswordUpdateRequest $request) : RedirectResponse {
        $request->validated();

        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
