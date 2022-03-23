<?php 

// Class utama yang nanti akan mengatur semua controller yang ada di folder controllers
class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/'. $view . '.php';
    }
}
