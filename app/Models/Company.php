<?php

namespace App\Models;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'mobileNumber', 'email', 'password', 'description', 'profileImage', 'maincatogryId', 'typeId'
    ];


    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class, 'maincatogryId', 'id');
    }
    public function images()
    {
        return $this->hasMony(Image::class, 'companyId', 'id');
    }
    public function locations()
    {
        return $this->hasmony(Location::class, 'companyId', 'id');
    }
    public function packages()
    {
        return $this->hasMony(Package::class, 'companyId', 'id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'typeId', 'id');
    }
    public function socialMedia()
    {
        return $this->hasOne(SocialMedia::class, 'companyId', 'id');
    }
    public function rating()
    {
        return $this->hasOne(Rating::class, 'companyId', 'id');
    }
}
