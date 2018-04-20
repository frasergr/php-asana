<?php

namespace Asana\Resources;

use Asana\Resources\Gen\ProjectsBase;

class Projects extends ProjectsBase
{
    public function createSectionInProject($projectId, $params = array())
    {
        $path = sprintf("/projects/%s/sections", $projectId);
        return $this->client->post($path, $params);
    }
}
