<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class StarredFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_id',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
