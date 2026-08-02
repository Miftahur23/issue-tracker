<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'creator_id',
    ];

    protected $attributes = [
        'status' => 'planning',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
