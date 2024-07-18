<?php
namespace App\Models;

class ProductModel extends \CodeIgniter\Model
{
    protected $table='prtable';
    protected $allowedFields=['title','cf','hf','a'];
    protected $returnType = Entities\Products::class;
   


           public function getProjectAsList()
	{
		$list = [];
		$prtable = $this->select('title, cf,hf,a')->findAll();
		
		foreach($prtable as $pr)
		{
		 $list[] = [
                    'title' => $pr->title,
                    'cf' => $pr->cf,
                    'hf' => $pr->hf,
                    'a' => $pr->a
                          ];
		}
		
        }
}
