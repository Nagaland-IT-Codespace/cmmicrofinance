<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scheme()
    {
        return $this->hasOne(SchemeMaster::class, 'id', 'scheme_id');
    }

    public function district()
    {
        return $this->hasOne(DistrictMaster::class, 'id', 'district_id');
    }
    public function bank()
    {
        return $this->hasOne(BankMaster::class, 'id', 'bank_id');
    }
}
