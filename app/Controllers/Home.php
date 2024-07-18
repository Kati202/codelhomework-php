<?php

namespace App\Controllers;

use App\Views\IndexView;


class Home extends BaseController
{
    public function index(): string
    {
        $view= IndexView::Begin();
       
        $view.= IndexView::Home();
        
        $view.=IndexView::End();
        
        return   $view;
              
    }
}
