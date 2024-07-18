<?php

namespace App\Controllers;

use App\Views\IndexView;
use App\Views\ServiceView; 

class Service extends BaseController
{
     public function service()
        { 
                $view = IndexView::Begin();
		
		$error = null;
		$inserted = false;
		$post = $this->request->getPost();
		if($post)
		{
			$model = model(\App\Models\ServiceModel::class);
			$inserted = $model->save($post);
			
			if(!$inserted)
			{
				$error = $model->getErrorsAsText();
			}
		}
		$view .= ServiceView::CreationForm($inserted, $error);
		
		$view .= IndexView::End();
		return $view;
     }
}