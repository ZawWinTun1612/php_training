<?php

namespace App\Contracts\Services\Task;

use Illuminate\Http\Request;

//Interface for task service
interface TaskServiceInterface
{

    //To get task list
    public function getTask();

    //To add new task
    public function addTask($validated);

    //To delete task by id
    public function deleteTask($id);
}
