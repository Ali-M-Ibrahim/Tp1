<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    public function getCredentials(){
        return $this->hasOne(credential::class);
    }

    public function getAccounts(){
        return $this->hasMany(accoun::class);
    }

    public function getAllServices(){
        return $this->belongsToMany(service::class,
            'account_services',
            'client_id',
            'service_id');
    }

}
