<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Answer extends Model
{
    protected $fillable = ['title', 'published_at'];
    protected $dates = ['published_at'];
    
    public function user() {
        
        return $this->belongsTo('App\User');
        
    }
    
    public function Question() {
        
        return $this->belongsTo('App\Question');
        
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
