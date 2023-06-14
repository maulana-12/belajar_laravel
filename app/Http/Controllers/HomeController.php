<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function registerMember(Request $request)
    {
        $users = User::all();

        if ($request->wants_to_become_member) {
            // Buat entri baru di tabel 'members'
            $member = Member::create([
                'user_id' => $users->id,
                // Kolom-kolom lain yang diperlukan
            ]);
        }
    }
}
