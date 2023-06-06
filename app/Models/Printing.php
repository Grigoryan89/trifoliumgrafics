<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Printing extends Model
{
    use HasFactory;

    protected $table = 'printings';

    protected $fillable =  ['name','description'];


    public function images()
    {
        return $this->hasMany(Images::class, 'printing_id');
    }
}
