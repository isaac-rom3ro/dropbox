<?php
    declare(strict_types=1);
    namespace App\Views;
    use App\Models\Admin;

    class AdminView {
        // View does not have attributes, only methods
        public function render(Admin $admin): string {
            $isAdmin = $admin->isAdmin()? "Admin": "Non Admin";
            return sprintf("The use %s is %s", $admin->getName(), $isAdmin);
        }
    }