<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    const ADMIN = 1;
    const COORDINADOR = 2;
    const PADRINO = 3;
}
