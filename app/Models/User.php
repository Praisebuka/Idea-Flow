<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Idea;
use App\Models\Problem;
use App\Models\Follower;
//use Laravel\Sanctum\HasApiTokens;
use App\Models\Solution;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasUuids;
    protected $table='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'country',
        'ip',
        'followers',
        'avatar',
        'cover_photo'
    ];
  public function idea(){
    return $this->hasMany(Idea::class,'user_id');
  }
  public function problem(){
    return $this->hasMany(Problem::class,'user_id');
   }

   public function solution(){
    return $this->hasMany(Solution::class,'user_id');
 }

public function follower(){
  return $this->hasMany(Follower::class,'user_id');
}

public function check_followers(){
  return $this->follower->where('follower_id', auth()->id());
}
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
}
