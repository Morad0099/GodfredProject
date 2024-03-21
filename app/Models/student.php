<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'student_no',
        'deleted',
    ];

    public function carts()
    {
        return $this->hasMany(CArts::class, 'student_no', 'name');
    }

    public function french()
    {
        return $this->hasMany(french::class, 'student_no','name');
    }

    public function english()
    {
        return $this->hasMany(results::class, 'student_no','name');
    }

    public function gh_lang()
    {
        return $this->hasMany(gh_language::class, 'student_no','name');
    }

    public function maths()
    {
        return $this->hasMany(Maths::class, 'student_no','name');
    }

    public function rmes()
    {
        return $this->hasMany(rme::class, 'student_no','name');
    }

    public function sciences()
    {
        return $this->hasMany(science::class, 'student_no','name');
    }

    public function socials()
    {
        return $this->hasMany(socialstd::class, 'student_no','name');
    }

    public function computings()
    {
        return $this->hasMany(computing::class, 'student_no', 'name');
    }
}
