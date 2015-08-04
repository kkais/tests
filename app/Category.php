<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Category extends Model
{
    protected $fillable = ['title', 'published_at'];
    protected $dates = ['published_at' ];
    
    public function user() {
        
        return $this->belongsTo('App\User');
        
    }
    
    public function tags() {
        
        return $this->belongsToMany('App\Tag')->withTimestamps();
        
    }
    
    public function getTagListAttribute() {
        
        return $this->tags->lists('id')->toArray();
        
    }
    
//    public function Quizes() {
//        
//        return $this->hasMany('App\Quiz');
//        
//    }
    
    public function setPublishedAtAttribute($date) {
        
        //$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
        $this->attributes['published_at'] = Carbon::parse($date);
        
    }
    
    public function scopePublished($query) {
        
        $query->where('published_at','<=',  Carbon::now());
        
    }
    
    public function scopeUnPublished($query) {
        
        $query->where('published_at','=>',  Carbon::now());
        
    }
}
