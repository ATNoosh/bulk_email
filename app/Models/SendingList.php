<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SendingList extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        SendingList::creating(function ($model) {
            $model->creator_id = auth()->user()->id;
        });
    }

    public function emails(): BelongsToMany
    {
        return $this->belongsToMany('emails', 'emails_sending_lists');
    }
}
