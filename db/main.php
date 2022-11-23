<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Movie;
use Tudublin\MovieRepository;
use Tudublin\DirectorRepository;
use Tudublin\Director;

$movieRepository = new MovieRepository();
$movieRepository->resetTable();

$directorRepository = new DirectorRepository();
$directorRepository->resetTable();

$director1 = new Director();
$director1->setName("Matt");
$directorRepository->insert($director1);

$directorRepository->createAndInsert("Jojo");

$directors = $directorRepository->findAll();
foreach ($directors as $director) {
    print $director;
}

// use handy method added to MovieRepository to create and insert object
$movieRepository->createAndInsert('Jaws', 9.99, 'horror', 1);
$movieRepository->createAndInsert('Jumanji', 7, 'entertainment', 1);

// add new object without using createAndInsert(..,.)
$jaws2 = new Movie();
$jaws2->setTitle('Jaws2');
$jaws2->setPrice(5.99);
$jaws2->setCategory('horror');
$jaws2->setDirectorId(2);
$movieRepository->insert($jaws2);

$movies = $movieRepository->findAll();
foreach ($movies as $movie){
    print $movie;
}