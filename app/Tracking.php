<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Tracking extends Model
{
    protected $guarded = [];

    public function item()
    {
        return $this->hasOne(Item::class);
    }
}
