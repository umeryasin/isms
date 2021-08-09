<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\School;
use App\Models\User;

class Branch extends Model
{
    use HasFactory;
    protected $table = "branches";
    protected $fillable = [
        "school_id",
        "code",
        "name",
        "address",
        "phone",
        "registration_date",
        "email",
        "fax",
        "latitude",
        "longitude",
        "google_api",
        "zoom_api_key",
        "zoom_secret_key",
        "is_online_admission",
        "facebook_url",
        "twitter_url",
        "linkedin_url",
        "youtube_url",
        "instagram_url",
        "user_id",
        "status",
    ];
    public function schoolInfo()
    {
        return $this->belongsTo(School::class, "school_id", "id");
    }
    public function userInfo()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
