<?php
    # Here we included all those classes using autoload.php
    # Here is where we are gonna use the components combined
    require_once  __DIR__. "/vendor/autoload.php";
    use App\Controllers\PersonController;
    use App\Models\Person;
    use App\Views\PersonView;

    # Instantiating all 
    $person = new Person(name: "Isaac", age: 20);
    $view = new PersonView();
    $controller = new PersonController(model: $person, view: $view);
    
    echo $controller->showPerson();

    require_once __DIR__. "/vendor/autoload.php"; // Always required the autoload from vendor (.php)
    //Instatiating all classes created
    use App\Models\Admin;
    use App\Views\AdminView;
    use App\Controllers\AdminController;
    
    // Always prefer generics names like view and controllers
    $admin = new Admin(name: "ADMIN", age: 20);
    $view = new AdminView();
    $controller = new AdminController(model:$admin, view: $view);
    echo $controller->showAdminStatus();