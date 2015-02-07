<?php

class Report extends Eloquent {


	protected $fillable = array('userName', 'store', 'comment','ticket','user_id', 'type', 'subtype');
    protected $perPage = 3;
	public $errors;
	public function user(){

		return $this->belongsTo('User');

	}

	public function validarDatosReporte($data)
	{

        $rules = array(
            'userName' => 'required',
            'store' => 'numeric|required|exists:datos,DET',
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

    public function validAndSafe($data)
    {
        if($this->validarDatosReporte($data))
        {
            $this->fill($data);
            $this->save();
            return true;
        }
        return false;

    }

   

}
