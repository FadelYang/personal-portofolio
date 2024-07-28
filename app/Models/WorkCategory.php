<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkCategory extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = [
        'id'
    ];

    public function works()
    {
        return $this->belongsToMany(Work::class, 'work_work_category');
    }
}
