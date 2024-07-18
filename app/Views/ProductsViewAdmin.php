<?php

namespace App\Views;

use App\Views\IndexView;
use \App\Models\Entities\Products;
use \App\Models\Entities\Products2;

class ProductsViewAdmin
{
  public static function PrBEG($productsbeg)
    {
        return view('template/prbeg', ['productsbeg' => $productsbeg]);
    }
 
public static function Table($prtable)
	{
    
		return view('template/table', ['prtable' => $prtable]);
	}
public static function NewButton()
	{
		$url = base_url('products/edit');
		
		return '<a href="'. $url .'" >
					<i class=""></i> Új projekt létrehozása
				</a>';
        }
 
}



