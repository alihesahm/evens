<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'manager_creator_id',
        'address',
        'image_path',
        'phone_number',
        'country_id',
        'city_id',
        'role_id',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    // $user=User::find(1);
    // $user_id=$user->role_id;

    // $role=Role::find($user_id);
    // $role->name;
    // $user=User::find(1);
    // $user->role->name;

    public function role()

    {
        return $this->belongsTo(role::class);
    }
    public function report()
    {
        return $this->hasMany(report::class);
    }
    public function party()
    {
        return $this->hasMany(Party::class);
    }
    // public function secuirity(){
    //     return $this->hasOne(secuirity::class);
    // }
}
