<?php
class Controller {
    private $model;


    public function __construct() {
        $this->model = new Model();
    }

    public function list_it() {
        $this->messages = $this->model->messages();
        include("View.php");
    }

    public function send() {
        $nick = $_POST["nickname"];
        if ($nick != ""){
            setcookie("nickname", $nick);
            $nimi = $nick;
        } else {
            $nimi = $_COOKIE['nickname'];
        }
        $this->model->add_message($nimi, $_POST["message"]);
        header("Location: Chat.php?action=list_it");
    }
}
?>