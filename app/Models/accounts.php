<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    use HasFactory;

    public function getClient(){
        return $this->belongsTo(Client::class, "client_id","id");
    }

}
