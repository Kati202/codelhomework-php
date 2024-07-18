<?php
namespace App\Views;


class AdminView
{
	public static function LoginForm()
	{
		helper('form');

$html  = '<div class="container2">'; 
$html .= form_open(base_url('login'), ['class' => 'input-form2']); 

$html .= '<div>';
$html .= form_label('Felhasználónév', 'user', ['class' => 'label2']); 
$html .= form_input('user', '', 'id="user" class="input-field2"'); 
$html .= '</div>';

$html .= '<div>';
$html .= form_label('Jelszó', 'pass', ['class' => 'label2']); 
$html .= form_password('pass', '', 'id="pass" class="input-field2"'); 
$html .= '</div>';

$html .= '<div>';
$html .= form_submit('submit', 'Belépés', 'class="admin-button"'); 
$html .= '</div>';

$html .= form_close();
$html .= '</div>'; 


return $html;
	}
}
