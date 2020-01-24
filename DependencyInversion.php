<?php 

interface Filesystem
{
    public function store(File $file);
}

class AmazonFilesystem implements Filesystem
{

}

class Storage
{
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function store(File $file)
    {
        $this->filesystem->store($file);
    }
}

$storage = new Storage(
    new AmazonFilesystem 
);

$storage->store(new File);
