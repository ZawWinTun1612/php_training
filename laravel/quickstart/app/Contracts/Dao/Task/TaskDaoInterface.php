<?php

namespace App\Contracts\Dao\Task;

use Illuminate\Http\Request;

/**
 * Data accessing object for task
 */
interface TaskDaoInterface
{

    /**
     * To get task list
     */
    public function getTask();

    /**
     * To add new task 
     */
    public function addTask($validated);

    /**
     * To delete task by id
     * @param string $id task id
     */
    public function deleteTask($id);
}
