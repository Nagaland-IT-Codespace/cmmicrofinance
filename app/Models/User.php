<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use MBarlow\Megaphone\HasMegaphone;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory;
    use HasMegaphone;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'dept',
        'district',
        'mobile',
        'bank'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // department relationship
    public function departmentName()
    {
        return $this->belongsTo(DeptMaster::class, 'dept', 'id');
    }
    // district relationship
    public function districtName()
    {
        return $this->belongsTo(DistrictMaster::class, 'district', 'id');
    }
    // bank
    public function bankName()
    {
        return $this->belongsTo(BankMaster::class, 'bank', 'id');
    }
}
