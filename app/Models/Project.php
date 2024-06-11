<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'supervisor_id',
        'title',
        'summary',
        'keywords'
    ];

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class);
    }
}
