<?php

class Report extends Eloquent {


	protected $fillable = array('userName', 'store', 'comment','ticket','user_id');

	public function user(){

		return $this->belongsTo('User');

	}

}
