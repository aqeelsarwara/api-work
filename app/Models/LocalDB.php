<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalDB extends Model
{
    use HasFactory;
    protected $table = 'localdbstore';
    
    protected $fillable = [
        'departmentId',
        'description',
        'userId',
        'orgId',
        'sessionId',
    ];
}
