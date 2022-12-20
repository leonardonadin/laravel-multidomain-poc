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

    public function getPriceAttribute() {
        return $this->prices()->where('account_id', session('account_id'))->first()->price;
    }

    public function getPromoPriceAttribute() {
        return $this->prices()->where('account_id', session('account_id'))->first()->promo_price;
    }

    public function getQuantityAttribute() {
        return $this->stocks()->where('account_id', session('account_id'))->first()->quantity;
    }

    public function prices() {
        return $this->hasMany(ProductPrice::class);
    }

    public function stocks() {
        return $this->hasMany(ProductStock::class);
    }
}
