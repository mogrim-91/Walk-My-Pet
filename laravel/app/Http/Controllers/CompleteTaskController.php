<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class CompleteTaskController extends Controller
{
    public function __invoke(Task $task)
    {
        $task->completed = true;
        $task->save();

        return back();
    }
}
