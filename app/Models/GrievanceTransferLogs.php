<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrievanceTransferLogs extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function fromDept()
    {
        return $this->hasOne(DeptMaster::class, 'id', 'from_dept');
    }
    public function toDept()
    {
        return $this->hasOne(DeptMaster::class, 'id', 'to_dept');
    }
}
