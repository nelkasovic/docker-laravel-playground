<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property bool size_small
 * @property bool state_free
 * @property bool international
 * @property integer number
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Gate extends Model
{
    use HasFactory;
}
