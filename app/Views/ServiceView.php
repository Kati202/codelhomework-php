<?php
namespace App\Views;

use \App\Models\Entities\Service;

class ServiceView
{
    
public static function CreationForm($success = false, $error = null)
{
    helper('form');
    $html = '';

   
    if ($success) {
        $html .= IndexView::SuccessMessage('Sikeres művelet!');
        IndexView::$formAutoValues = false;
    } elseif ($error) {
        $html .= IndexView::ErrorMessage('Hibásan kitöltve!', $error);
    }

    
    $html .= '<div class=scontainer>';

   
    $html .= '<div class=sfromcontainer>';
    $html .= form_open(base_url('service'));
    $html .= form_hidden('service_id');
    $html .= IndexView::FormSelect('Termék neve:', 'names', Service::$names);
    $html .= IndexView::FormInput('Mennyiség(literben):', 'amount', 'text', 'Például: 3 li', '');
    $html .= IndexView::FormInput('Lakcím:', 'adress', 'text', 'Például:6000.Jókai u.2', '');
    $html .= IndexView::FormInput('E-mail:', 'email', 'email', 'Például:nagy2000@gmail.com', '');
    $html .= IndexView::FormInput('Telefonszám:', 'phone', 'tel', 'Például:06203867645', '');
    $html .= IndexView::FormCheckbox('accept');
    $html .= IndexView::FormButton('Küldés', 'check');
    $html .= form_close();
    $html .= '</div>';

   
    $html .= '<div class=hcontainer>';
    $html .= '<img src="' . base_url('picture/hordo4.png') . '" alt="Hordó" class=hordo>';
    $html .= '</div>';

    $html .= '</div>'; 

    return $html;
}
}
             
