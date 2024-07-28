<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = [
        'id'
    ];

    public function workCategories()
    {
        return $this->belongsToMany(WorkCategory::class, 'work_work_category');
    }
}
