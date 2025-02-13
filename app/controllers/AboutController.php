<?php
class AboutController {

    public function index() {
        $title = 'Welcome to About';
        $headerTitle = 'About Page';

        $this->view('home/About', ['title' => $title, 'headerTitle' => $headerTitle]);
    }

    private function view($view, $data = []) {
        extract($data);
        require_once "../app/views/{$view}.php";
    }
}
    