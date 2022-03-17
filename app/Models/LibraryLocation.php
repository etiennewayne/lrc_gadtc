<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryLocation extends Model
{
    use HasFactory;

    protected $table = 'library_locations';
    protected $primaryKey = 'library_location_id';

    protected $fillable = ['location', 'sys_user'];


}
