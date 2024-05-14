<?php

class HomeController {

    // Index method to display the home page
    public function index() {
        // Include necessary files
        require_once('../config/config.php');
        require_once('../app/models/UserModel.php');

        // Example database operation
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();

        // Load the view
        require_once('../app/views/home.php');
    }
}

?>
