<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
   public function before(RequestInterface $request, $arguments = null) 
   {
       $path=$request->getUri()->getPath();
       $path=explode('/',$path);
       $path=$path [count($path)-1];
       
       if($path != 'login')
		{
			if(!\App\Controllers\AdminAuth::GetSession())
			{
				return redirect()->to(base_url('login'));
			}
		}
       
   } 

   public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) { }
}
