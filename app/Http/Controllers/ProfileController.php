<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    public function show(User $user): View
    {
        $followersCount = $user->followed()->count();
        $followingCount = $user->following()->count();
        $isFollowing = auth()->user()->following()->where('followed_id', $user->id)->exists();
        $favoriteTowns = $user->favoriteTowns;

        return view('profile.show', compact('user', 'followersCount', 'followingCount', 'isFollowing', 'favoriteTowns'));
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
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

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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
    public function follow($id)
    {
        $user = auth()->user();

        if ($user->id == $id || $user->following()->where('followed_id', $id)->exists()) {
            return back();
        }

        $user->following()->attach($id);
        return back();
    }

    public function unfollow($id)
    {
        $user = auth()->user();
        $user->following()->detach($id);
        return back();
    }
}
