<?php
// Example of Extend Exception
class A extends Exception
{
    public function __construct($message, $code, Exception $previous = null) : void
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ":[" . $this->code . "]" . $this->message;
    }

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