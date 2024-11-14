<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        "role_id",
        "name",
        "created_at",
        "updated_at"
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
