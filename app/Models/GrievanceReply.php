<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrievanceReply extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function grievance()
    {
        return $this->hasOne(Grievance::class, 'id', 'grievance_id');
    }
}
