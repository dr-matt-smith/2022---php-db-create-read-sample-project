<?php
namespace Tudublin;


class Movie
{
    private int $id = 0;
    private string $title;
    private float $price;
    private string $category;

    private int $directorId;

    public function __toString(): string
    {
        return "MOVIE: "
            . "id = $this->id / title = $this->title / price = $this->price / directory = {$this->getDirector()}\n";
    }

    public function getDirectorId(): int
    {
        return $this->directorId;
    }

    public function setDirectorId(int $directorId): void
    {
        $this->directorId = $directorId;
    }

    public function getDirector(): Director
    {
        $directorRepository = new DirectorRepository();
        $director = $directorRepository->find($this->directorId);

        return $director;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }
}
