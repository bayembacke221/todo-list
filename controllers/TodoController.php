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

    public function edit()
    {
        $id = $_GET['id'];
        $todo = $this->todoService->getById($id);
        include_once 'views/edit.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $this->todoService->update($id, $title, $description);
        header('Location: todo.php');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->todoService->delete($id);
        header('Location: todo.php');
    }

}