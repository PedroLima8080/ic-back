<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionPerPeriod extends Model
{
    use HasFactory;

    protected $table = 'missions_per_period';

    protected $fillable = ['delivery_quantity', 'start_date', 'end_date', 'reward', 'company_id'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
