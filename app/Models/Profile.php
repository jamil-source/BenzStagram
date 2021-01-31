<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ?  $this->image : 'profile/OAmjDt7sbXky770joUsHua9c5bDzj1Rs3cy7CvVM.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
