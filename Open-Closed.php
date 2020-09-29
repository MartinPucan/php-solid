<?php 

interface Check
{
    public function check();
}

class EmailChecker implements Check
{
    public function check()
    {

    }
}

class UrlChecker implements Check
{
    public function check()
    {
        
    }
}

class UserChecker implements Check
{
    public function check()
    {
        
    }
}

class CheckThing
{
    private $checker = [];

    public function addChecker(Check $check)
    {
        $this->checker[] = $check;
    }

    public function check()
    {
        foreach ($this->checker as $checker) {
            $checker->check();
        }
    }

}

$checker = new CheckThing();
$checker->addChecker(new EmailChecker);
$checker->addChecker(new UrlChecker);
$checker->addChecker(new UserChecker);
$checker-check();
