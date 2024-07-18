<?php
namespace App\Controllers;

use App\Views\IndexView;
use App\Views\ServiceView; 

class ServiceEdit extends BaseController
{
     public function serviceedit()
        { 
                $view = IndexView::AdminBegin();
		
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
		
		$view .= IndexView::AdminEnd();
		return $view;
     }
}
