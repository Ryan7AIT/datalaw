<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFond1Attribute()
    {
        return $this->attributes['fond1'] == 1; // Cast to true or false
    }

    public function getFond2Attribute()
    {
        return $this->attributes['fond2'] == 1; // Cast to true or false
    }

    public function getFond3Attribute()
    {
        return $this->attributes['fond3'] == 1; // Cast to true or false
    }


    public function getFond4Attribute()
    {
        return $this->attributes['fond4'] == 1; // Cast to true or false
    }

    // public function getFond4Attribute()
    // {
    //     return $this->attributes['fond4'] == 1; // Cast to true or false
    // }

    public function getFond5Attribute()
    {
        return $this->attributes['fond5'] == 1; // Cast to true or false
    }

    public function getFond6Attribute()
    {
        return $this->attributes['fond6'] == 1; // Cast to true or false
    }

    public function getFond7Attribute()
    {
        return $this->attributes['fond7'] == 1; // Cast to true or false
    }
}
