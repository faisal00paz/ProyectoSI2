<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = ['name', 'employees_quantity'];
    public $timestamps = false;

    public function customer(){
        return $this->hasOne(Customer::class);
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
