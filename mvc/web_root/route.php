<?php
class Route {
    private $uri;
    private $controller;

    public function __construct($uri, $controller) {
        $this->uri = $uri;
        $this->controller = $controller;
    }

    public function process() {
        switch ($this->uri) {
            case '/':
                $this->controller->home();
                break;
            case '/folder1/':
                $this->controller->folder1();
                break;
            case '/folder2/':
                $this->controller->folder2();
                break;
            default:
                http_response_code(404);
                echo 'Page not found';
                break;
        }
    }
}
