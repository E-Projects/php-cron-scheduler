<?php

namespace GO\Method;

use Exception;

class CallUserFunction implements CommandExecutionInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute($executable, $arguments)
    {
        ob_start();

        try {
            $returnData = call_user_func_array($executable, $arguments);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        $outputBuffer = ob_get_clean();

        return $outputBuffer . (is_string($returnData) ? $returnData : '');
    }
}
