<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    use HasFactory;

    public $table = "makul";

    protected $primaryKey = "idm"; // custom primary key

    public $incrementing = false; // mematikan auto increment

    protected $keyType = "string"; // custom type primary key (defaultnya autoincrement

    public $fillable = ['idm', 'nama', 'sks'];
}
