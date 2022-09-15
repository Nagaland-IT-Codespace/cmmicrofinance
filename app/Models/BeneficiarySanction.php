<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeneficiarySanction extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function appForm()
    {
      return $this->hasOne(ApplicationForm::class, 'id', 'app_id');
    }

    public function scheme()
    {
      return $this->hasOne(SchemeMaster::class, 'id', 'scheme_id');
    }
    
    public function bank()
    {
      return $this->hasOne(BankMaster::class, 'id', 'bank_id');
    }
}
