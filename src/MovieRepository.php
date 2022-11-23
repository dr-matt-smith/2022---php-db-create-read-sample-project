<?php
namespace Tudublin;


use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class MovieRepository extends DatabaseTableRepository
{
    public function createAndInsert($title, $price, $category, int $directorId)
    {
        $m = new Movie();
        $m->setTitle($title);
        $m->setPrice($price);
        $m->setCategory($category);
        $m->setDirectorId($directorId);

        $this->insert($m);
    }
}
