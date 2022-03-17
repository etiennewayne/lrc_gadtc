<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    use HasFactory;


    protected $table = 'material_types';
    protected $primaryKey = 'material_type_id';

    protected $fillable = ['material_type', 'sys_user'];
}
