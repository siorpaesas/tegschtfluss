<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model {
    use HasFactory;

    protected $fillable = ['book_id', 'name', 'excerpt', 'sequence'];

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function build() {
        return $this->hasMany(Build::class);
    }

    public function note() {
        return $this->belongsToMany(Note::class);
    }
}
