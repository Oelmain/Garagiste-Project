<?php

namespace App;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;

class Reparation extends Model
{
    public function vehicle()
    {
        return $this->belongsTo(Car::class);
    }

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }
}
