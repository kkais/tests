<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Quiz extends Model
{
    protected $fillable = ['title', 'published_at', 'category_id'];
    protected $dates = ['published_at'];

    public function user() {
        
        return $this->belongsTo('App\User');
        
    }
    
    public function category() {
        
        return $this->belongsTo('App\Category');
        
    }
    
    public function questions() {
        
        return $this->hasMany('App\Question');
    }


    public function setPublishedAtAttribute($date) {
        
        $this->attributes['published_at'] = Carbon::parse($date);
        
    }
    
    public function getCatListAttribute() {
        
        return $this->category_id;
        
    }
    
    public function scopePublished($query) {
        
        $query->where('published_at','<=',  Carbon::now());
        
    }
    
    public function scopeUnPublished($query) {
        
        $query->where('published_at','=>',  Carbon::now());
        
    }
}
