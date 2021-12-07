<?php

namespace App\Entity;

use App\Repository\TasksRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Tasks
 *
 * @ORM\Table(name="tasks", indexes={@ORM\Index(name="label_id", columns={"label_id"}), @ORM\Index(name="proj_id", columns={"proj_id"}), @ORM\Index(name="status_id", columns={"status_id"})})
 * @ORM\Entity
 */
class Tasks
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
     * @ORM\Column(name="task_name", type="string", length=255, nullable=false)
     */
    private $taskName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="task_start", type="date", nullable=false)
     */
    private $taskStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="task_deadline", type="date", nullable=false)
     */
    private $taskDeadline;

    /**
     * @var string
     *
     * @ORM\Column(name="task_desc", type="string", length=255, nullable=false)
     */
    private $taskDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="task_users", type="string", length=255, nullable=false)
     */
    private $taskUsers;

    /**
     * @var \Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var \Projects
     *
     * @ORM\ManyToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proj_id", referencedColumnName="id")
     * })
     */
    private $proj;

    /**
     * @var \Labels
     *
     * @ORM\ManyToOne(targetEntity="Labels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_id", referencedColumnName="id")
     * })
     */
    private $label;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    public function setTaskName(string $taskName): self
    {
        $this->taskName = $taskName;

        return $this;
    }

    public function getTaskStart(): ?\DateTimeInterface
    {
        return $this->taskStart;
    }

    public function setTaskStart(\DateTimeInterface $taskStart): self
    {
        $this->taskStart = $taskStart;

        return $this;
    }

    public function getTaskDeadline(): ?\DateTimeInterface
    {
        return $this->taskDeadline;
    }

    public function setTaskDeadline(\DateTimeInterface $taskDeadline): self
    {
        $this->taskDeadline = $taskDeadline;

        return $this;
    }

    public function getTaskDesc(): ?string
    {
        return $this->taskDesc;
    }

    public function setTaskDesc(string $taskDesc): self
    {
        $this->taskDesc = $taskDesc;

        return $this;
    }

    public function getTaskUsers(): ?string
    {
        return $this->taskUsers;
    }

    public function setTaskUsers(string $taskUsers): self
    {
        $this->taskUsers = $taskUsers;

        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getProj(): ?Projects
    {
        return $this->proj;
    }

    public function setProj(?Projects $proj): self
    {
        $this->proj = $proj;

        return $this;
    }

    public function getLabel(): ?Labels
    {
        return $this->label;
    }

    public function setLabel(?Labels $label): self
    {
        $this->label = $label;

        return $this;
    }


}
