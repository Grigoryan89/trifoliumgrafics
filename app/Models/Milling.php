<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milling extends Model
{
    use HasFactory;

    protected $table = 'millings';

    protected $fillable = ['en_name','en_description','am_name','am_description','ru_name','ru_description'];

    public function images()
    {
        return $this->hasMany(Images::class, 'milling_id');
    }
}
