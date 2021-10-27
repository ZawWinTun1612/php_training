<?php

use Psy\CodeCleaner\NamespaceAwarePass;

namespace App\Dao\Task;

use App\Models\Task;
use App\Contracts\Dao\Task\TaskDaoInterface;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Data accessing object for task
 */
class TaskDao implements TaskDaoInterface
{

    //To get task
    public function getTask()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return $tasks;
    }

    //To save task
    public function addTask($validated)
    {
        $task = new Task();
        $task->name = $validated['name'];
        $task->save();
        return $task;
    }

    //To delete task
    public function deleteTask($id)
    {
        Task::findOrFail($id)->delete();
        return redirect('/');
    }
}
