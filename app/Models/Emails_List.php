<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails_List extends Model
{
    use HasFactory;
    protected $table = 'emails_list';
    public function email()
    {
        return $this->belongsTo(Email::class);
    }
}
