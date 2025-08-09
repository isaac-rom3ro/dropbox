<?php
    # Orchestrates Model and View
    declare(strict_types=1); 
    namespace App\Controllers;
    use App\Models\Person;
    use App\Views\PersonView;
    
    class PersonController {
        private Person $model;
        private PersonView $view;

        public function __construct(Person $model, PersonView $view) {
            $this->model = $model;
            $this->view = $view;
        }

        // Getters and Setters
        public function showPerson(): string {
            return $this->view->render($this->model);
        }

        public function getModel(): Person {
                return $this->model;
        }
        public function setModel(Person $model): void {
                $this->model = $model;
        }
        public function getView(): PersonView {
                return $this->view;
        }
        public function setView(PersonView $view): void {
                $this->view = $view;
        }
    }