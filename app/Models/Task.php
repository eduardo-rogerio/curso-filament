<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function taskGroup()
    {
        return $this->belongsTo(TaskGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
