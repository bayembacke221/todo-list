<?php

namespace controllers;

class TodoController
{

    private $todoService;

    public function __construct($todoService)
    {
        $this->todoService = $todoService;
    }

    public function index()
    {
        $todos = $this->todoService->getAll();
        include_once 'views/todo.php';
    }

    public function create()
    {
        include_once 'views/create.php';
    }

    public function store()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        echo $title;
        $this->todoService->create($title, $description);
        header('Location: todo.php');
    }

    public function edit($_id)
    {
        $todo = $this->todoService->getById($_id);
        include_once 'views/edit.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        $this->todoService->update($id, $title, $description, $status);
        header('Location: todo.php');
    }

    public function delete($_id)
    {
        $this->todoService->delete($_id);
        header('Location: todo.php');
    }

    public function searchTodo()
    {
        $keyword = $_POST['keyword'];
        $todos = $this->todoService->searchTodo(
            $keyword
        );
        include_once 'views/todo.php';
    }

}