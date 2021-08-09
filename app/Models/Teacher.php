<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Gender;
use App\Models\BloodGroup;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teachers";
    protected $fillable = [
        "first_name",
        "last_name",
        "national_id",
        "phone",
        "gender_id",
        "blood_group_id",
        "religion",
        "dob",
        "present_address",
        "permenent_address",
        "salary",
        "joining_date",
        "other_info",
        "resume",
        "photo",
        "status",
        "user_id",
    ];
    private $pre_url_photo = "assets/upload/teachers/photo/";
    private $pre_url_resume = "assets/upload/teachers/resumes/";
    public function userInfo()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function genderInfo()
    {
        return $this->belongsTo(Gender::class, "gender_id", "id");
    }
    public function bloodGroupInfo()
    {
        return $this->belongsTo(BloodGroup::class, "blood_group_id", "id");
    }
    public function getPhotoAttribute($value)
    {
        return $this->pre_url_photo.$value;
    }
    public function getResumeAttribute($value)
    {
        return $this->pre_url_resume.$value;
    }
}
