<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

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

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // $request->user()->fill($request->validated());

        $validated = $request->validated();

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // if ($request->hasFile('avatar')) {
        //     if (!empty($request->user()->avatar)) {
        //         Storage::disk('public')->delete($request->user()->avatar);
        //     }
        //     $path = $request->file('avatar')->store('img', 'public');
        //     $validated['avatar'] = $path;
        // }

        // if ($request->avatar) {
        //     if (!empty($request->user()->avatar)) {
        //         Storage::disk('public')->delete($request->user()->avatar);
        //     }

        //     $newFileName = Str::after($request->avatar, 'tmp/');

        //     Storage::disk('public')->move($request->avatar, "img/$newFileName");

        //     $validated['avatar'] = "img/$newFileName";
        // }

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');

            dd($avatar);

            if (!empty($request->user()->avatar)) {
                Storage::disk('public')->delete($request->user()->avatar);
            }

            $fileName = $avatar->hashName();

            Storage::disk('public')->put('img/' . $fileName, file_get_contents($avatar));

            $photoPath = Storage::url('profile/' . $fileName);

            $validated['avatar'] = $photoPath;

        }

        // $request->user()->save();
        $request->user()->update($validated);

        return Redirect::route('dashboard')->with('success', 'Profil berhasil diperbarui');
    }

    public function upload(Request $request)
    {

        if ($request->hasFile('avatar')) {

            // ambil parameter avatar
            $avatar = $request->file('avatar');
            $user = $request->user();

            // cek apakah ada gambar lama
            if ($user->avatar) {
                $oldPath = str_replace('/storage/', '', $user->avatar);

                Storage::disk('public')->delete($oldPath);
            }

            $fileName = $avatar->hashName();

            Storage::disk('public')->put('img/' . $fileName, file_get_contents($avatar));

            $photoPath = Storage::url('img/' . $fileName);

            return $user->update([
                'avatar' => $photoPath
            ]);

        }
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

        return Redirect::to('/')->with('success', 'Akun berhasil dihapus');
        ;
    }
}
