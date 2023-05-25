<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Client extends Authenticatable
{

    protected $table = 'clients';
    protected $primaryKey = 'ClientID';

    protected $fillable = ['Name', 'Email', 'Address', 'password'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'ClientID');
    }

}
