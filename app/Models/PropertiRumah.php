<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiRumah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // Add other fields here
    ];
}