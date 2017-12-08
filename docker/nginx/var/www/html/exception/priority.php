<?php
// Example of Priority
class A
{
    public function exception()
    {
        throw new \RuntimeException('RuntimeException', 200);
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
        catch (\Exception $e)
        {
            echo 'Exception';
        }
        catch (\Throwable $e)
        {
            echo 'Throwable';
        }
    }
}

$b = new B();
$b->throwException();