<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archived extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'name'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}