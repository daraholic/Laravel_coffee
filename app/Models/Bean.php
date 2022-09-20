<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bean extends Model
{
    use HasFactory;

    protected $fillable = ['name','roast','regin','flavor'];

    public function parameter()
    {
        return $this->hasMany(Parameter::class, 'namespace_id', 'id');
    }
}