<?php

class Notice extends Eloquent {

public function user(){

		return $this->belongsTo('User');

	}



}