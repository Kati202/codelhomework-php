<?php

namespace App\Controllers;

use App\Views\IndexView;


class HomeEdit extends BaseController
{
    public function indexedit(): string
    {
        $view= IndexView::AdminBegin();
       
       
        
        $view.= IndexView::Home();
        
        $view.=IndexView::AdminEnd();
        
        return   $view;
              
    }
}


