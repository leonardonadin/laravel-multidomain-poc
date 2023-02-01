<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function account() {
        return $this->belongsTo(Account::class);
    }

    public function getPriceAttribute()
    {
        if ($this->prices()->count() > 0) {
            $price = $this->prices()->where('account_id', session('account_id'))->first();

            if ($price) {
                return $price->price;
            }
        }

        return null;
    }

    public function getPromoPriceAttribute() {
        if ($this->prices()->count() > 0) {
            $price = $this->prices()->where('account_id', session('account_id'))->first();

            if ($price) {
                return $price->promo_price;
            }
        }

        return null;
    }

    public function getQuantityAttribute()
    {
        if ($this->stocks()->count() > 0) {
            $stock = $this->stocks()->where('account_id', session('account_id'))->first();

            if ($stock) {
                return $stock->quantity;
            }
        }

        return null;
    }

    public function prices() {
        return $this->hasMany(ProductPrice::class);
    }

    public function stocks() {
        return $this->hasMany(ProductStock::class);
    }
}
