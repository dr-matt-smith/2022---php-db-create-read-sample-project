<?php
namespace Tudublin;


use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class DirectorRepository extends DatabaseTableRepository
{
    public function createAndInsert(string $name)
    {
        $d = new Director();
        $d->setName($name);

        $this->insert($d);
    }
}
