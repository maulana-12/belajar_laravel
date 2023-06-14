<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'born_date' => ['required', 'date', 'before_or_equal:' . date('Y-m-d')],
            // 'phone_number' => ['required', 'numeric', 'digits_between:1,13'],
            // 'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    protected function create()
    {
        $userId = Auth::user()->id;
        $bornDate = Auth::user()->born_date;
        $idMember = Member::generateId($userId, $bornDate);
        Member::create([
            // 'id' => $data['name'],
            // 'user_id' => $data['email'],
            'id' => $idMember,
            'user_id' => $userId,
        ]);
        return redirect()->back()->with('success', 'Member berhasil dibuat.');
    }
}
