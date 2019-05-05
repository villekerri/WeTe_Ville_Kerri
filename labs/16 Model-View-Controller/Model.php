<?php
class Model {
    private $file = "messages.txt";

    public function messages() {
        if (file_exists($this->file)) {
            return file($this->file);
        } else {
            return array();
        }
    }

    public function add_message($nickname, $message) {
        $this->luku = $this->luku + 1;
        $message = date("H:i:s ") . $nickname . (": \n") . $message;
        file_put_contents($this->file, "{$message}\n", FILE_APPEND);
    }
}
?>