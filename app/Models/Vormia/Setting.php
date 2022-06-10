<?php

namespace App\Models\Vormia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    // Disable Default Timestamps
    public $timestamps = false;

    // Do not allow mass assignment
    protected $guarded = ['setting_id'];
}
