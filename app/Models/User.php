<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Translatable\HasTranslations;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'image',
        'phone',
        'email',
        'email_verified_at',
        'password',
        'role',
        'active_status',
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

    public  $translatable = ['name'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setEmailAttribute($value){

        $this->attributes['email'] = strtolower($value);
    }

    public function setPasswordAttribute($value){

        $this->attributes['password'] = bcrypt($value);
    }

    function profile_image_path(): string
    {
        return file_exists(public_path($this->image))? asset($this->image) : asset('dashboards/assets/img/avatar/avatar-1.png');
    }

}
