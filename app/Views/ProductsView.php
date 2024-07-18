<?php
namespace App\Views;
use \App\Models\Entities\Products;
use \App\Models\Entities\Products2;

class ProductsView
{
    public static function PrBEG($productsbeg)
 {
  return view ('template/prbeg',['productsbeg' => $productsbeg]);
 }
 
public static function Table($prtable)
	{
    
		return view('template/table', ['prtable' => $prtable]);
	}
}

