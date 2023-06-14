<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Member extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function generateId($userId, $bornDate)
    {
        $randomNumber = Str::random(4, '0123456789'); // Menghasilkan string acak dengan panjang 6
        // $randomNumber = intval($strRandomNumber);
        return $userId . $bornDate . $randomNumber;
    }
}
