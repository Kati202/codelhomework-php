<?php
namespace App\Models;


class ServiceModel extends \CodeIgniter\Model
{
    protected $table='service';
    protected $allowedFields=['name','amount','adress','email','phone'];
    protected $returnType = Entities\Service::class;
    
    protected $validationRules = 
	[
		'amount' => 'required',
                'adress'=>'required',
                'email' => 'required',
		'phone' => 'required',
                'accept' => 'required',
               
	];
	protected $validationMessages = 
	[
    'amount' => [
    'required' => 'A mennyiség mező kitöltése kötelező!'
    ],
            'adress' => [
    'required' => 'A lakcím mező kitöltése kötelező!'
    ],
             'email' => [
    'required' => 'Az e-mail mező kitöltése kötelező!'
    ],
            'phone' => [
    'required' => 'A telefonszám mező kitöltése kötelező!'
    ],
            'accept' => [ 
        'required' => 'Az adatkezelési szabályzat elfogadása kötelező!'
    ],

	];
        public function getErrorsAsText()
	{
		$errors = $this->errors();
		$text = implode( '<br>',$errors);
		return $text;
                
	}
        public function getchatbox()
        {}
}


