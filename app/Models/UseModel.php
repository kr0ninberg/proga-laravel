<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UseModel extends Model
{
    use HasFactory;

    protected $table = 'uses';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function places(){
        return $this->belongsTo(Place::class);
    }

    public function things(){
        return $this->belongsTo(Thing::class);
    }
}
