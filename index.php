<?php

include_once 'config/DatabaseConnection.php';
include_once 'service/TodoService.php';
include_once 'controllers/TodoController.php';
include_once 'models/Todo.php';
include_once 'migration/CreateTableTodo.php';

use config\DatabaseConnection;
use service\TodoService;
use controllers\TodoController;
use migration\CreateTableTodo;

$databaseConnection = new DatabaseConnection();
$connection = $databaseConnection->getConnection();

$createTableTodo = new CreateTableTodo();
$createTableTodo->up($connection);

$todoService = new TodoService($connection);
$todoController = new TodoController($todoService);

$page = isset($_GET['page']) ? $_GET['page'] : null;
$_id = isset($_GET['_id']) ? $_GET['_id'] : null;

switch ($page) {
    case 'create':
        $todoController->create();
        break;
    case 'store':
        $todoController->store();
        break;
    case 'edit':
        $_id = $_GET['_id'];
        $todoController->edit($_id);
        break;
    case 'update':
        $todoController->update();
        break;
    case 'delete':
        $_id = $_GET['_id'];
        $todoController->delete($_id);
        break;
    default:
        $todoController->index();
        break;
}

?>




