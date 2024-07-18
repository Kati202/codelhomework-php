<?php

namespace App\Controllers;

use App\Views\IndexView;
use App\Views\ProductsView;


class Products extends BaseController
{
    public function products()
    { 
         $view= IndexView::Begin();
        
         $modell = model(\App\Models\ProductsModel2::class);
         $productsbeg = $modell->findAll();
         $view.= ProductsView::PrBEG($productsbeg);
         
         $model = model(\App\Models\ProductModel::class);
         $prtable = $model->findAll();
         $view.= ProductsView::Table($prtable);
        
         $view.=IndexView::End();
        
         return   $view;
     }
   
}
