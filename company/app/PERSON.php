<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PERSON extends Model
{
    protected $table='person';
    protected $fillable=['PName','PLastName','Title','PEmailAdress','PhoneNumber'];
}
