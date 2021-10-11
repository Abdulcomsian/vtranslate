<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
   use HasFactory;
   protected $fillable = ['job_title', 'expiry_status', 'expiry_date', 'job_desc', 'status', 'budget', 'cancel_reason'];
   public function jobspairlang() //relation with voice overmodel
   {
      return $this->hasMany(JobsPairLanguages::class);
   }

   //relation with user
   public function user()
   {
      return $this->belongsTo(User::class);
   }

   //get favourite jobs relations
   public function favourite()
   {
      return $this->hasOne(FavouriteJobs::class);
   }

   //relation with job proposal

   public function jobproposals()
   {
      return $this->hasMany(JobProposal::class);
   }
}
