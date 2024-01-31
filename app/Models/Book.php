<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "title",
        "description",
        "author",
        "genre",
        "publication_year",
        "total_copies",
        "available_copies",
        "created_at",
        "updated_at",
        "deleted_at",
    ];
}
