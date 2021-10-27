<?php

namespace App\Http\Controllers\Task;

use App\Models\Task;
use App\Contracts\Services\Task\TaskServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

/**
 * This is Task controller.
 * This handles Task CRUD processing.
 */
class TaskController extends Controller
{

    //task interface
    private $taskInterface;

    //create new constructer
    public function __construct(TaskServiceInterface $taskServiceInterface)
    {
        $this->taskInterface = $taskServiceInterface;
    }

    //To show  create task view
    public function getTask()
    {
        $getTask = $this->taskInterface->getTask();
        return view('tasks', [
            'tasks' => $getTask
        ]);
    }

    //To add new task view
    public function addTask(UserRequest $request)
    {
        $validated = $request->validated();
        $this->taskInterface->addTask($validated);
        return redirect('/');
    }

    //To delete task view by id
    public function deleteTask($id)
    {
        $this->taskInterface->deleteTask($id);
        return redirect('/');
    }
}
