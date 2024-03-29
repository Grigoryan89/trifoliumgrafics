<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'url', 'printing_id','milling_id',
    ];

    public function printing()
    {
        return $this->belongsTo(Printing::class, 'id');
    }

    public function milling()
    {
        return $this->belongsTo(Milling::class, 'id');
    }
    public function laser()
    {
        return $this->belongsTo(Laser::class, 'id');
    }

}
