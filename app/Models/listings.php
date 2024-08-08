<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listings extends Model
{
    use HasFactory;

    protected $fillable=['title','user_id','age_limit','company','location','website','email','logo','description','tag'];

    public function scopefilter($query,array $fillter){
        if ($fillter['tag'] ?? false) {
            $query->where('tag','like','%'.request('tag').'%');
        }
        //dd($fillter['search']);
        if ($fillter['search'] ?? false) {
            $query->where('title','like','%'.request('search').'%')
            ->orwhere('description','like','%'.request('search').'%')
            ->orwhere('tag','like','%'.request('search').'%')->get();
        }
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
