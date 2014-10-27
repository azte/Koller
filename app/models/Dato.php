<?php

class Dato extends Eloquent {


	
	protected $table = 'datos';
	public $timestamps = false;
	public $errors;


	// public function validarDatosReporte($data)
	// {

 //        $rules = array(
 //            'userName' => 'required',
 //            'store' => 'required|min:1|max:3',
 //            'comment'     => 'required|min:3',
 //            'ticket'  => 'min:6'
 //        );

 //        $validator = Validator::make($data, $rules);

 //        if ($validator->passes())
 //        {
 //            return true;
 //        }
        
 //        $this->errors = $validator->errors();
        
 //        return false;


	// }

}
