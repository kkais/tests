<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Question extends Model
{
    protected $fillable = ['title', 'published_at', 'quiz_id'];
    protected $dates = ['published_at'];


    public function user() {
        
        return $this->belongsTo('App\User');
        
    }
    
    public function quiz() {
        
        return $this->belongsTo('App\Quiz');
        
    }
    
    public function answers() {
        
        return $this->hasMany('App\Answer');
        
    }
    
    public function setPublishedAtAttribute($date) {
        
        $this->attributes['published_at'] = Carbon::parse($date);
        
    }
    
    public function scopePublished($query) {
        
        $query->where('published_at', '<=', Carbon::now());
        
    }
    
    public function scopeUnPublished($query) {
        
        $query->where('published_at', '=>', Carbon::now());
        
    }
}
