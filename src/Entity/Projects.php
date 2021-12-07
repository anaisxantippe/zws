<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projects
 *
 * @ORM\Table(name="projects", indexes={@ORM\Index(name="space_id", columns={"space_id"}), @ORM\Index(name="status_id", columns={"status_id"})})
 * @ORM\Entity
 */
class Projects
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
     * @ORM\Column(name="proj_name", type="string", length=255, nullable=false)
     */
    private $projName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="proj_start", type="date", nullable=false)
     */
    private $projStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="proj_deadline", type="date", nullable=false)
     */
    private $projDeadline;

    /**
     * @var string
     *
     * @ORM\Column(name="proj_desc", type="string", length=255, nullable=false)
     */
    private $projDesc;

    /**
     * @var \Workspaces
     *
     * @ORM\ManyToOne(targetEntity="Workspaces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="space_id", referencedColumnName="id")
     * })
     */
    private $space;

    /**
     * @var \Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;


}
