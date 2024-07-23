<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User\Email;
use App\Models\User\Mobile;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'family_name',
        'given_name',
        'middle_name',
        'nickname',
        'gender_id',
        'birthday',
        'email_forwarding',
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
        'password' => 'hashed',
    ];

    public function mainEmail() {
        return $this->hasOne(Email::class)
            ->where('is_main', true);
    }

    public function emails() {
        $this->hasMany(Email::class);
    }

    public function mainMobile() {
        return $this->hasOne(Mobile::class)
            ->where('is_main', true);
    }

    public function mobile() {
        $this->hasMany(Mobile::class);
    }
}
