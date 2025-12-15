<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Permite atribuição em massa nos campos abaixo
    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
    ];

    // Relacionamento: um evento tem muitos tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
