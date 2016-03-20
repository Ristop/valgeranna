<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id','title', 'content'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function by(User $user){
        $this->user_id = $user->id;
    }
}
