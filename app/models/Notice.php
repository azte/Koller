<?php

class Notice extends Eloquent {


protected $fillable = array('title', 'content');

public $errors;

public function user(){

		return $this->belongsTo('User');

	}

public function isValid($data)
    {
        $rules = array(
            'title' => 'required',
            'content' => 'required',
            
        );

        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
    }

public function validAndSafe($data)
    {
        // Revisamos si la data es válida
        if ($this->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $this->fill($data);
            // Guardamos el usuario
            $this->save();
            
            return true;
        }
        
        return false;
    }





}