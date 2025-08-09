<?php
    declare(strict_types=1);
    namespace App\Controllers;
    // The controller is gonna use both model and view
    use App\Models\Admin;
    use App\Views\AdminView;

    class AdminController {
        // They need to be referenced, because we are not extending from any class 
        private Admin $model;
        private AdminView $view;

        public function __construct(Admin $model, AdminView $view) {
            $this->model = $model;
            $this->view = $view;
        }

        // We use the same method to render the model inside another, because this "render" is gonna be called by our controller 
        public function showAdminStatus(): string {
            return $this->view->render(admin: $this->model);
        }
    }