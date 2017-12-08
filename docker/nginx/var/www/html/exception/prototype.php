<?php
// Example of Basic Prototype
define('DEBUG', true);
class A
{
    public function tryCatch(int $throwable = 0) : bool
    {
        $boolean = true;
        try
        {
            if ($throwable > 0)
            {
                throw new Exception('error', 200);
            }
            $boolean = true;
        }
        catch (\Throwable $e)
        {
            if (DEBUG === true)
            {
                echo $e->getCode();
                echo "<br/>";
                echo $e->getMessage();
                var_dump($e->getTrace());
            }
            $boolean = false;
        }
        finally
        {
            return $boolean;
        }
    }
}

$a = new A();
var_dump($a->tryCatch(1));