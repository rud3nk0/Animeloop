<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voiceActings extends Model
{
    use HasFactory;

    protected $table = 'voiceActings';

    protected $fillable = [
        'name'
    ];

    public $timestamps = false;
}
