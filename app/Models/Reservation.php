<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "description",
        "reservation_date",
        "return_date",
        "created_at",
        "updated_at",
        "deleted_at",
    ];
}
