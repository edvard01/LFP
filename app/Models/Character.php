<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        "user_id",
        "character_name",
        "character_io",
        "character_race",
        "character_class",
        "character_spec",
        "character_ilvl",
        "character_level",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
