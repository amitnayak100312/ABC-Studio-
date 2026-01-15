<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailEntry extends Model
{
    use HasFactory;

    protected $table = 'mails';

    protected $fillable = ['name', 'email', 'subject', 'message'];
}