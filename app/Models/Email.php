<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $table = 'email_content';

    public function recipients()
    {
        return $this->hasMany(Emails_List::class);
    }
}
