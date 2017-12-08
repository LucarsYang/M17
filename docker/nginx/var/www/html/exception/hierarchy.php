<?php
// Example of Hierarchy
class A
{
    public function exception()
    {
        throw new \Exception('exception', 200);
    }
}

class B extends A
{
    public function throwException()
    {
        try
        {
            $this->exception();
        }
        catch (\RuntimeException $e)
        {
            echo 'RuntimeException';
        }
        catch (\Throwable $e)
        {
            echo 'Throwable';
        }
    }
}

$b = new B();
$b->throwException();