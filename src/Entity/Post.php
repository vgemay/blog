<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Post_date;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $Post_title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Post_text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->Post_date;
    }

    public function setPostDate(\DateTimeInterface $Post_date): self
    {
        $this->Post_date = $Post_date;

        return $this;
    }

    public function getPostTitle(): ?string
    {
        return $this->Post_title;
    }

    public function setPostTitle(?string $Post_title): self
    {
        $this->Post_title = $Post_title;

        return $this;
    }

    public function getPostText(): ?string
    {
        return $this->Post_text;
    }

    public function setPostText(?string $Post_text): self
    {
        $this->Post_text = $Post_text;

        return $this;
    }
}
