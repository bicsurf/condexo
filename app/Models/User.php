<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'date',
        'city',
        'nation',
        'address',
        'postalCode',
        'phone',
        'email',
        'password',
    ];
    //function search
    public function toSearchableArray(){
        $users = $this->user;
        $array =[
            'id' => $this->id,
            'name' => $this->name,
            'surname'=> $this->surname,
            'date'=>$this->date,
            'city'=>$this->city,
            'nation'=>$this->nation,
            'address'=>$this->address,
            'postalCode'=>$this->postalCode,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'password'=>$this->password,
            'user' => $this->$users
        ];
        return $array;
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
