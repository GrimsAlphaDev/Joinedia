<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\DetailUser;
use App\Models\University;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function create(Request $request)
    {

        // get University Data from Model University
        $universityData = University::all();

        return view('profile.profileInput', [
            'user' => $request->user(),
            'universityData' => $universityData,
        ]);
    }

    public function store(Request $request){
        // return $request->all();

        if (isset($request->nim)) {
            $nim = $request->nim;
        } else {
            $nim = null;
        }

        if (isset($request->nip)){
            $nip = $request->nip;
            $prodi = $request->prodi;
        } else {
            $nip = null;
            $prodi = null;
        }

        if (isset($request->no_keanggotaan)) {
            $no_keanggotaan = $request->no_keanggotaan;
            $nama_himauk = $request->nama_himauk;
        } else {
            $no_keanggotaan = null;
            $nama_himauk = null;
        }

        if (isset($request->no_ijazah)) {
            $no_ijazah = $request->no_ijazah;
        } else {
            $no_ijazah = null;
        }

        $profil = new DetailUser;
        $profil->user_id = $request->user()->id;
        $profil->university_id = $request->universitas;
        $profil->nim = $nim;
        $profil->nip = $nip;
        $profil->no_ijazah = $no_ijazah;
        $profil->no_keanggotaan = $no_keanggotaan;
        $profil->nama = $request->nama;
        $profil->alamat = $request->alamat;
        $profil->no_hp = $request->no_telp;
        $profil->dosen_prodi = $prodi;
        $profil->nama_himauk = $nama_himauk;
        $profil->save();

        // return feedback
        if ($profil) {
            // save operation successful
            return redirect()->route('dashboard');
        } else {
            // save operation failed
            $errors = $profil->errors();
            // do something with the errors here
            return redirect()->route('profile.create');
        }

    }
}
