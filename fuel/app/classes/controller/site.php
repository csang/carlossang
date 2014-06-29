<?php

class Controller_Site extends Controller_App
{
	public function get_index()
	{
		$this->template->body = View::forge('site/index');
	}

	public function get_sent()
	{
		$type = 'success';
		$message = 'Your message was sent successfully';
		$this->template->message = View::forge('site/message', array(
			'type'    => $type,
			'message' => $message,
		));
	}

	public function get_error()
	{
		$type = 'error';
		$message = 'There was an error, please try again later';
		$this->template->message = View::forge('site/message', array(
			'type'    => $type,
			'message' => $message,
		));
	}

	public function post_send()
	{
		$name = Input::post('name');
		$email = Input::post('email');
		$message = Input::post('message');
		$to = 'csang.chino11@gmail.com';

		if($name != "" AND $email != "" AND $message != ""){
			mail($to,$name . ' (' . $email . ')', $message);
			Response::redirect('sent');
		}else{
			Response::redirect('error');
		}
	}
}