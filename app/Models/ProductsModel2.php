<?php
namespace App\Models;

class ProductsModel2 extends \CodeIgniter\Model
{
 protected $table='productsbeg';
 protected $allowedFields=['id','title','description'];
 protected $returnType = Entities\Products2::class;
 

   
}
