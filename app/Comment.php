<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    /*public function ticket()
	{
		return $this->belongsTo('App\Ticket', 'post_id');
	}*/

	public function post()
	{
		return $this->morphTo();
	}
}
