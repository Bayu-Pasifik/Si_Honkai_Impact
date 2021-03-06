<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valkyrie extends Model
{
    protected $table = 'tb_valkyrie';
    protected $primaryKey = 'id_valkyrie';
    public $incrementing = true;
    protected $fillable = ['nama', 'rank', 'tipe', 'role', 'foto'];
    public $timestamps = false;
}
