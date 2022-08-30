<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemeMaster extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function dept()
    {
      return $this->hasOne(DeptMaster::class, 'id', 'dept_id');
    }
}
