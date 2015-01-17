<?php

class Report extends Eloquent {


	protected $fillable = array('userName', 'store', 'comment','ticket','user_id', 'type', 'subtype');

	public $errors;
	public function user(){

		return $this->belongsTo('User');

	}

	public function validarDatosReporte($data)
	{

        $rules = array(
            'userName' => 'required',
            'store' => 'numeric|required|min:1|exists:datos,DET',
            'comment'     => 'required|min:2',
            'ticket'  => 'numeric|min:6',

        );

        $validator = Validator::make($data, $rules);

        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;


	}

}
