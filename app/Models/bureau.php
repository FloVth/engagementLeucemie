<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bureau extends Model
{
    use HasFactory;
    protected $table ='bureaus';
    protected $fillable = ['nom','prenom','role'];
    public $timestamps = false;
}
