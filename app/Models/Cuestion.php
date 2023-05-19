<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestion extends Model
{
    use HasFactory;

    protected $table = 'cuestiones';
    protected $primaryKey = 'cuestion_id';
    public $incrementing = true;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['enunciado','estado'];

}
