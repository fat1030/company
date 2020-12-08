<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PROJECT extends Model
{
    protected $table='company';
    protected $fillable=['CompanyName','InternetAdress'];
}
