<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = "schools";
    protected $fillable = [
        "code", 
        "name", 
        "address", 
        "phone", 
        "registration_date", 
        "email", 
        "fax", 
        "footer", 
        "currency", 
        "currency_symbol", 
        "latitude", 
        "longitude", 
        "google_api", 
        "is_rtl", 
        "is_frontend", 
        "logo", 
        "status"
    ];
    private $pre_url = "assets/upload/schools/";
    public function getLogoAttribute($value)
    {
        return $this->pre_url.$value;
    }
}
