<?php
namespace App\Views;

class IndexView
{
public static function Begin()
 {
  return view ('template/begin');
 }
 public static function AdminBegin()
 {
  return view ('template/adminbegin');
 }

 public static function End ()
 {
     return view('template/end');
 }
 public static function AdminEnd()
 {
  return view('template/adminnend')   ;
 }
public static function Home()
{
    return view('template/home');
}

  public static function SuccessMessage($message) {
    return "<div class='success-message'>
           <div class='success-message-container'>
           <div class='success-message-box'>{$message}</div>
           <img src='" . base_url('picture/kocci.jpg') . "' alt='Sikeres űrlap' class='success-message-image'></div>
           </div>";
}
public static function ErrorMessage($title, $message) {
    return "<div class='error-message-box'>{$title}<br>{$message}</div>";
}

public static function FormInput($text, $name, $type = 'text', $placeholder = '', $value = '')
{
    return            '<div>'. 
					form_label($text, $name) .
					form_input($name, self::SetValue($name, $value), ['id' => $name,  'placeholder' => $placeholder], $type) .
		      '</div>';
	}
public static function FormSelect($text, $name, $options, $value = 0)
	{
		return '<div >'. 
					form_label($text, $name) .
					form_dropdown($name, $options, self::SetValue($name, $value), ['service/id' => $name,]) .
                        '</div>';}
public static function FormCheckbox($accept) {
    return '<div class="checkbox-container">' . 
                form_checkbox($accept, '1', false, ['id' => $accept]) .
                form_label('Elfogadom az adatkezelési szabályzatot és az egyéb feltételeket!', 
                $accept, ['class' => 'checkbox-label']) .
           '</div>';
}  
  public static function FormButton($text,$classes = '')
	{
		
		return form_button(['type' => 'submit','class' => $classes], $text);
	}
    private static function SetValue($name, $value)
	{
		if(self::$formAutoValues)
		{
			return set_value($name, $value);
		}
		else
		{
			return $value;
		}
	}
	public static $formAutoValues = true;
	

}

