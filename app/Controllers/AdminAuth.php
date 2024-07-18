<?php


namespace App\Controllers;

use \App\Views\IndexView;

class AdminAuth extends BaseController
{
    public static function GetSession()
    {
        $session=session();
        $get=$session->get('user');
        
        return $get;
    }
    public static function SetSession()
    {
        $session=session ();
        $session->set('user',true);
    }
    public static function HasSession()
    {
        $session=session();
        $session->remove('user');
    }
    
    public static function login()
{ 
    $request = service('request');
    $post = $request->getPost();
    
    if ($post)
    {
        $user = $post['user'];
        $pass = $post['pass'];
        
        if ($user === 'Kati123' && $pass === '123456')
        {
            self::SetSession();
            return redirect()->to(base_url('index/admin'));
        }
    }
    
   
    
    $view = \App\Views\AdminView::LoginForm();
    $view .= IndexView::End();
    $view .= '<link rel="stylesheet" type="text/css" href="' . base_url('res/style.css') . '">';
    return $view;
}
   
    public function logout()
    {
    self::HasSession();
    return $this->login();
    }
    
}


