<?php

namespace App\Models;

use App\Models\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;

    public function logs() {
        return $this->hasMany( Log::class );
    }
}
