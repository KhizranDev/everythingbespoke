<?php
// A class to help work with Sessions
// In our case, primarily to manage logging users in and out

// Keep in mind when working with sessions that it is generally 
// inadvisable to store DB-related objects in sessions

class Session {
	
	private $logged_in=false;
	private $user_logged_in=false;
	public $login_id;
	public $user_id;
	public $user_name;
	public $mode;
	public $message;
    public $loginTime;

	function __construct() {
		session_start();
		$this->check_message();
		$this->check_login();
		$this->check_user_login();
		if($this->logged_in) {
		  // actions to take right away if user is logged in
		} else {
		  // actions to take right away if user is not logged in
		}
	}



  public function is_logged_in() {
    return $this->logged_in;
  }

    public function is_user_logged_in() {
    return $this->user_logged_in;
  }

	public function login($user) {
    // database should find user based on username/password
    if($user){
		$this->login_id 	= $_SESSION['login_id'] 	= $user->Id;
        $this->user_id 		= $_SESSION['user_id'] 		= $user->UserId;
		$this->user_name 	= $_SESSION['user_name'] 	= $user->UserName;
        $this->mode 		= $_SESSION['mode'] 		= $user->Mode;
		$this->image_url	= $_SESSION['image_url']	= $user->ImageURL;
		
        $this->logged_in = true;
    }
  }

  	public function user_login($user) {
        // database should find user based on username/password
        if($user){
          $this->user_id = $_SESSION['uid'] = $user;
          $this->user_logged_in = true;
        }
    }

  public function logout() {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_cat_id']);
    unset($this->user_id);
    $this->logged_in = false;
  }

    public function user_logout() {
    unset($_SESSION['uid']);
    unset($this->user_id);
    $this->user_logged_in = false;
  }

	public function message($msg="") {
	  if(!empty($msg)) {
	    // then this is "set message"
	    // make sure you understand why $this->message=$msg wouldn't work
	    $_SESSION['message'] = $msg;
	  } else {
	    // then this is "get message"
			return $this->message;
	  }
	}

	private function check_login() {
    if(isset($_SESSION['user_id'])) {
	  $this->login_id = $_SESSION['login_id'];
	  $this->Mode = $_SESSION['mode'];
      $this->user_id = $_SESSION['user_id'];
	  $this->user_name = $_SESSION['user_name'];
	  $this->image_url = $_SESSION['image_url'];
      $this->logged_in = true;
    } else {
      unset($this->user_id);
      $this->logged_in = false;
    }
  }

  	private function check_user_login() {
    if(isset($_SESSION['uid'])) {
      $this->user_id = $_SESSION['uid'];
      $this->user_logged_in = true;
    } else {
      unset($this->user_id);
      $this->user_logged_in = false;
    }
  }

	private function check_message() {
		// Is there a message stored in the session?
		if(isset($_SESSION['message'])) {
			// Add it as an attribute and erase the stored version
      $this->message = $_SESSION['message'];
      unset($_SESSION['message']);
    } else {
      $this->message = "";
    }
	}

}

$session = new Session();
$message = $session->message();
$user_name = $session->user_name;
$login_id = $session->login_id;

?>