<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Contacts extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $fillable = ['customer_id', 'fName', 'lName', 'telephone', 'email'];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
