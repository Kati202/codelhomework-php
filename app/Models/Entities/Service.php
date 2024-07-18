<?php
 namespace App\Models\Entities;
 
 class Service extends \CodeIgniter\Entity\Entity
 {
     public function getStatusAsText()
	{
		return self::$names[$this->name];
	}
	
	public static $names = ['Szőlő pálinka', 'Barack pálinka', 'Alma pálinka', 'Körte pálinka'];
     
   
 }


