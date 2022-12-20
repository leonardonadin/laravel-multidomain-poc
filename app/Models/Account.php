<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'domain',
        'subdomain'
    ];

    public function getUrlAttribute() {
        return 'http://'.($this->domain ?? $this->subdomain . '.' . config('app.domain'));
    }

    public function prices() {
        return $this->hasMany(ProductPrice::class);
    }

    public function stocks() {
        return $this->hasMany(ProductStock::class);
    }
}
