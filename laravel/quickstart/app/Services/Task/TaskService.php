<?php

namespace App\Services\Task;

use App\Contracts\Dao\Post\TaskDaoInterface;
use App\Contracts\Dao\Task\TaskDaoInterface as TaskTaskDaoInterface;
use App\Contracts\Services\Task\TaskServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

//services class for task
class TaskService implements TaskServiceInterface
{

    //task dao
    private $taskDao;

    //class constructor
    public function __construct(TaskTaskDaoInterface $taskDao)
    {
        $this->taskDao = $taskDao;
    }

    //to get Task list
    public function getTask()
    {
        return $this->taskDao->getTask();
    }

    //to add new task
    public function addTask($validated)
    {
        return $this->taskDao->addTask($validated);
    }

    //to delete task by id
    public function deleteTask($id)
    {
        return $this->taskDao->deleteTask($id);
    }
}
