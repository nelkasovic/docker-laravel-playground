<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property Carbon start_time
 * @property Carbon landing_time
 * @property integer number
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'start_time', 'landing_time'];
}
