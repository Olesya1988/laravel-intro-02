<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected $primary_key='id';
    use HasFactory;

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
