<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model {
    use HasFactory;

    protected $fillable = ['todo', 'done', 'prio', 'status'];

    public function chapter() {
        return $this->belongsToMany(Chapter::class);
    }
}
