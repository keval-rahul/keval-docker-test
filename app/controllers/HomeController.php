<?php
class HomeController {

    public function index() {
        // Set a title or any other data specific to the home page
        $title = 'Welcome to Home';
        $headerTitle = 'Home Page';

        // Optionally pass any data needed for the home page
        $this->view('home/index', ['title' => $title, 'headerTitle' => $headerTitle]);
    }

    // This method is used to include views dynamically
    private function view($view, $data = []) {
        extract($data);
        require_once "../app/views/{$view}.php";
    }
}
?>
