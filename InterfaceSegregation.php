
<?php
declare(strict_types=1);

interface Worker
{
    public function manage();
}

interface SleepAble
{
    public function sleep();
}

interface Workable
{
    public function work();
}

class HumanWorker implements Worker, Workable, SleepAble
{
    public function work()
    {
        echo 'work' . PHP_EOL;
    }

    public function sleep()
    {
        echo 'sleep' . PHP_EOL;
    }

    public function manage()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements Worker, Workable
{
    public function work()
    {
        echo 'work' . PHP_EOL;
    }

    public function manage()
    {
        $this->work();
    }
}

class Manager
{
    public function hire(Worker $worker)
    {
        $worker->manage() . PHP_EOL;
    }
} 

$manager = new Manager;
$manager->hire(new HumanWorker);
$manager->hire(new AndroidWorker);
