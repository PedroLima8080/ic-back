<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionPerPeriodRegister extends Model
{
    use HasFactory;

    protected $table = 'missions_per_period_registers';

    protected $fillable = ['mission_id', 'user_id', 'delivered_quantity'];

    public function mission() {
        return $this->hasOne(MissionPerPeriod::class, 'id', 'mission_id');
    }
}
