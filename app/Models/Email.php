<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Email extends Model
{
    use HasFactory;

    public function sendingLists():BelongsToMany
    {
        return $this->belongsToMany('sending_lists','emails_sending_lists');
    }
}
