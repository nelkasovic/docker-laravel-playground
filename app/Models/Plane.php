<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property integer passengers
 * @property double refuel_time
 * @property bool jet
 * @property bool propeller
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Plane extends Model
{
    use HasFactory;
}
