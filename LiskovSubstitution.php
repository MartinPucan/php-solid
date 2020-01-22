<?php

interface LessonRepository
{
    /**
    * @return array
    */
    public function all();
}

class FileLessonRepository implements LessonRepository
{
    private $lesson;

    public function __construct(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }

    public function all(): array
    {
        return ['bmw', 'audi'];
    }
}

class DatabaseLessonRepository implements LessonRepository
{
    private $lesson;

    public function __construct(Lesson $lesson)
    {
        $this->lesson = $lesson;
    }

    public function all(): array
    {
        return $this->lesson->all()->toArray();
    }
}
