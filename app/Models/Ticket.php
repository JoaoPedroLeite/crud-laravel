<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'event_id',
        'user_id',
        'price',
        'status',
    ];

    // Relacionamento: cada ticket pertence a um evento
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // Relacionamento: cada ticket pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
