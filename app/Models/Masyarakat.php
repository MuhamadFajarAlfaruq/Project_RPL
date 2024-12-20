<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    protected $table = "masyarakats";
    protected $fillable = ['nama', 'username', 'password', 'telp'];
    protected $primaryKey = "nik";
    protected $guard = "masyarakat";
    protected $hidden = "password";
}
