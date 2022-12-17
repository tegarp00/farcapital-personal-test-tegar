<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    public $guarded = ["id"];
    protected $table = "pendaftaran";

    public function persyaratan()
    {
        return $this->belongsTo(Persyaratan::class, 'id_persyaratan');
    }
}
