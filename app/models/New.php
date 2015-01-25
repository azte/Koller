<?php

class New extends Eloquent {

public function user(){

		return $this->belongsTo('User');

	}



}