<?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        
        $data = [
            'title' => 'Home page'
        ];

        if (isset($_SESSION['user_id'])) {
            $this->view('dashboard', $data);
        } else {
            $this->view('index', $data);
        }
    }
}
