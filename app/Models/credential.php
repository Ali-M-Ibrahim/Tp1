<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credential extends Model
{
    use HasFactory;

    public function getClient(){
        return $this->belongsTo(client::class,"client_id","id");
    }
}
