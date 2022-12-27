<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $primaryKey = 'obr_no';

    public $inrementing = false;

    public $keyType = 'string';
}
