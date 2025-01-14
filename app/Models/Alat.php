<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;
    protected $table = 'alats';
    protected $guarded = ['id'];

    public function monitoring()
    {
        return $this->hasMany(Monicontrolling::class, 'id_alat');
    }
}
