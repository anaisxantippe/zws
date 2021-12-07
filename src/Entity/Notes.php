<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table(name="notes", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Notes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="note_name", type="string", length=255, nullable=false)
     */
    private $noteName;

    /**
     * @var string
     *
     * @ORM\Column(name="note_content", type="string", length=500, nullable=false)
     */
    private $noteContent;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoteName(): ?string
    {
        return $this->noteName;
    }

    public function setNoteName(string $noteName): self
    {
        $this->noteName = $noteName;

        return $this;
    }

    public function getNoteContent(): ?string
    {
        return $this->noteContent;
    }

    public function setNoteContent(string $noteContent): self
    {
        $this->noteContent = $noteContent;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
