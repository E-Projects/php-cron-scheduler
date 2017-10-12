<?php

namespace GO\Method;

class ExecuteShellCommand implements CommandExecutionInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute($executable, $arguments)
    {
        $output = [];
        $exitCode = 0;
        exec($executable, $output, $exitCode);

        $result = implode("\n", $output);
        if ($exitCode != 0) {
            $result .= "\nExit code: $exitCode";
        }
        $result .= "\n";

        return $result;
    }
}
