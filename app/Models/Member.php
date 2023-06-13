<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Member extends Model
{
    use HasFactory;

    public static function generateId($userId, $bornDate)
    {
        $randomNumber = Str::random(4, '0123456789'); // Menghasilkan string acak dengan panjang 6
        $intRandNumb = Str::intval($randomNumber);
        return $intRandNumb . $userId . $bornDate;
    }
}
