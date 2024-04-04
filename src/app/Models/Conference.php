<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conference extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function lightningTalks(): HasMany
    {
        return $this->hasMany(LightningTalk::class);
    }
}
