<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Review
 *
 * @ORM\Entity()
 *
 * @ApiResource()
 */
class Review
{

    /**
     * @var  int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint")
     * @Assert\Range(min=0, max=5)
     */
    public $rating;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    public $body;

    /**
     * @var string
     *
     * @ORM\Column()
     * @Assert\NotBlank()
     */
    public $author;

    /**
     * @var \DateTimeInterface
     *
     * @ORM\Column(type="datetime")
     * @Assert\NotNull()
     */
    public $publicationDate;

    /**
     * @var Book
     *
     * @ORM\ManyToOne(targetEntity="Book", inversedBy="reviews")
     * @Assert\NotNull()
     */
    public $book;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

}
