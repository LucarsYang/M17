<?php
// Practice
class A
{
    public function throwException()
    {
        try
        {
            $exception = new \RuntimeException('Exception', 300);
            throw $exception;
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }
}

class B extends A
{
    public function tryCatch()
    {
        try
        {
            $this->throwException();
        }
        catch(\Exception $e)
        {
            if ($e instanceof \RuntimeException)
            {
                echo 'RuntimeException';
            }
            else if ($e instanceof \LogicException)
            {
                echo 'LogicException';
            }
        }
    }
}

$b = new B();
$b->tryCatch();