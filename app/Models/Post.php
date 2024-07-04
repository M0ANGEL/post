<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /* relacion uno a muchos inversa con usuarios */
    public function user(){
        return $this->belongsTo(User::class);
    }

    
    public function category(){
        return $this->belongsTo(category::class);
    }

    /* relacion muchos a muchos polimorficas con tags */
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }

      /* relacion muchos a muchos polimorficas con comentarrios */
      public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
