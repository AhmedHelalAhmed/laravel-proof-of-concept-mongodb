<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

/**
 * Class TaskController
 * @package App\Http\Controllers
 * @author Ahmed Helal Ahmed
 */
class TaskController extends Controller
{
    /**
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return Task::create($request->all());
    }

    /**
     * @param Task $task
     * @return Task
     */
    public function show(Task $task)
    {
        return $task;
    }


    /**
     * @param Request $request
     * @param Task $task
     * @return Task
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return $task;
    }

    /**
     * @param Task $task
     * @return int
     * @throws \Exception
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return 204;
    }
}
