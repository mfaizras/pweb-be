<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Order extends Model
{
    use HasUuids;

    protected $guarded = ['id'];

    protected $hidden = [
        'id'
    ];

    public function uniqueIds(): array
    {
        return ['uuid'];
    }

    public function destination(){
        return $this->belongsTo(Destination::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
}
