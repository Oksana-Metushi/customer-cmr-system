<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contacts;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['name', 'address', 'postal_code', 'place', 'telephone', 'email'];

    public function contacts(){
        return $this->hasMany(Contacts::class, 'customer_id', 'id');
    }
}
