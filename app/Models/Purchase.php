<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    public function purchaseItems(){
        return $this->hasMany(PurchaseItem::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
    
   
}
