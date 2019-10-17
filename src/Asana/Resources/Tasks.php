<?php

namespace Asana\Resources;

use Asana\Resources\Gen\TasksBase;

class Tasks extends TasksBase
{
    public function search($workspace, $params = array(), $options = array())
    {
        return $this->searchInWorkspace($workspace, $params, $options);
    }
    /**
     * Marks a set of tasks as dependencies of this task, if they are not already dependencies. A task can have at most 15 dependencies.
     *
     * @param  task The task ID to add dependencies to.
     * @param dependencies An array of task IDs that this task should depend on.
     * @return response
     */
    public function addDependencies($task, $params = array(), $options = array())
    {
        $path = sprintf("/tasks/%s/addDependencies", $task);
        return $this->client->post($path, $params, $options);
    }
    /**
     * Marks a set of tasks as dependents of this task, if they are not already dependents. A task can have at most 30 dependents.
     *
     * @param  task The task ID to add dependents to.
     * @param  dependents An array of task IDs that should depend on this task.
     * @return response
     */
    public function addDependents($task, $params = array(), $options = array())
    {
        $path = sprintf("/tasks/%s/addDependents", $task);
        return $this->client->post($path, $params, $options);
    }
}
