<?php   
    # Class name{}
    class Car {
        # Visibility Type Name
        public string $color;
        public string $model;


        # Method 
        public function startEngine():string {
            return "Engine started!";
        }
    }

    # Instantiate an object
    $tesla = new Car();

    # Manipulating its attributes
    # #object->attribute = value;
    $tesla->color = "Red";
    $tesla->model = "Model 3";
    
    # Call a method -> $object->method(params);
    echo $tesla->startEngine();