<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CartRequest;

class Cart extends Model
{
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id', 'product_id', 'amount',
    ];
    protected $guarded = [
        'id', 'password',
    ];
    
    
}
