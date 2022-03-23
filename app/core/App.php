<?php 

class App {
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($_GET);
    }

    // Untuk parsing URL
    public function parseURL() {
        if ( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
