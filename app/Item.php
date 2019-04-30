<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ItemCategory;
use App\User;

class Item extends Model
{

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(ItemCategory::class, 'item_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
