<?php
declare(strict_types=1);

interface Worker 
{
    public function work();
    public function sleep();
}

class HumanWorker implements Worker
{
    public function work()
    {
        echo 'work';
    }

    public function sleep()
    {
        echo 'sleep';
    }
}

class Manager
{
    public function hire(Worker $worker)
    {
        $worker->work();
        $worker->sleep();
    }
} 

$manager = new Manager;
$manager->hire(new HumanWorker);
