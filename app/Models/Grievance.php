<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grievance extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function scheme()
    {
      return $this->hasOne(SchemeMaster::class, 'id', 'scheme_id');
    }

    public function dept()
    {
      return $this->hasOne(DeptMaster::class, 'id', 'dept_id');
    }

    public function district()
    {
      return $this->hasOne(DistrictMaster::class, 'id', 'district_id');
    }
    public function grievanceTransferLogs()
    {
      return $this->hasMany(GrievanceTransferLogs::class, 'grievance_id', 'id');
    }

}
