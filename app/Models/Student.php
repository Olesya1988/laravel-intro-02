<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'name',
        'surname',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}