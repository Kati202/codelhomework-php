<?php


namespace App\Controllers;

use App\Views\IndexView;
use App\Views\ProductsViewAdmin;


class ProductsEdit extends BaseController
{
    public function productsedit()
    { 
        $view= IndexView::AdminBegin();
        
         $modell = model(\App\Models\ProductsModel2::class);
         $productsbeg = $modell->findAll();
         $view.= ProductsViewAdmin::PrBEG($productsbeg);
         $del = $this->request->getPost('delete');
         if($del){ $modell->delete($del); }
   
        
         $model = model(\App\Models\ProductModel::class);
         $prtable = $model->findAll();
         $view.= ProductsViewAdmin::Table($prtable);
         $view.=ProductsViewAdmin::NewButton('Új sor hozzáadása');
       ;

        
        $view.=IndexView::AdminEnd();
        
        return   $view;
}}
   
