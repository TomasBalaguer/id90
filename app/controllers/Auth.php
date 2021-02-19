<?php
require_once("../app/models/user.php");
require_once("../app/models/endpoints.php");

class Auth extends Controller {


  public function login()
  {
    $login = new endpoints("https://beta.id90travel.com/session.json");
    $login->setData([
            "session[airline]" => $_POST['airline'],
            "session[username]" => $_POST['username'],
            "session[password]" => $_POST['password'],
            "session[remember_me]" => 1
        ]);
    $res = $login->post();

    if (isset($res['error'])) {
      $_SESSION['login_error'] = $res['error'];
    } elseif (isset($res['member'])) {
      $_SESSION['user'] = $res['member'];
    }
    redirect("home");
  }

  public function logout()
  {
    unset($_SESSION['user']);
    redirect("home");
  }
}