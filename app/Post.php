<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    /**
     * Retrieve the Course associated with a specific Lesson by a foreign key.
     *
     * @params  n/a
     * @return  php variable $this that belongs to a certain Course.
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
