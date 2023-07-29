<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    protected $table = "colaboradores";

    protected $fillable = [
        'name',
        'lastNameP',
        'lastNameM',
        'area',
        'company',
        'department',
        'position',
        'dischargeDate',
        'status'
    ];
}
