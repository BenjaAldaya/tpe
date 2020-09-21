<?php
include_once 'app/models/task.model.php';
include_once 'app/views/task.view.php';

class TaskController {

private $model;
private $view;

function __construct() {
    $this->model = new TaskModel();
    $this->view = new TaskView();
}



}