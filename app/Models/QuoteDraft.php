<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteDraft extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_token', 'name', 'email', 'phone', 'contact_method',
        'service_type', 'description', 'goal', 'budget', 'timeline',
        'additional_notes', 'step_number', 'status', 'ip_address', 'submitted_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];
}
