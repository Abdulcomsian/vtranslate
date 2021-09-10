<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'country_id',
        'zipcode',
        'username',
        'job_notification',
        'user_status',
        'status',
        'resume',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function country()//relation with country model
     {
        return $this->belongsTo(Country::class);
     }
     public function usergeneralinfo()//relation with general info model
     {
        return $this->hasOne(UserGeneralInformation::class);
     }
     public function userlanguages()//relation with user languages model
     {
       return $this->hasMany(UserLanguages::class);
     }
     public function usersevices()//relation with services model
     {
        //pending due to incomplete structure
     }
     public function usersoftwares()//relation with software models
     {
        return $this->hasOne(UserSoftware::class);
     }
     public function userspicialize()//relation with user specialization
     {
        return $this->hasOne(UserSpecializations::class);
     }
     public function uservoicover()//relation with voice overmodel
     {
        return $this->hasOne(UserVoiceOver::class);
     }
}
