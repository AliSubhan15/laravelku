<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    use HasFactory;
}
