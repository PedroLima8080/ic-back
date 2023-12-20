<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company_id'];

    public function steps() {
        return $this->hasMany(Step::class, 'project_id', 'id');
    }
}
