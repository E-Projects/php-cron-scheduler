<?php

namespace GO\Method;

use Exception;

interface CommandExecutionInterface
{
    /**
     * @param mixed $executable
     * @param array $arguments
     *
     * @throws Exception
     *
     * @return string
     */
    public function execute($executable, $arguments);
}
