<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectLabels
 *
 * @ORM\Table(name="project_labels", indexes={@ORM\Index(name="label_id", columns={"label_id"}), @ORM\Index(name="proj_id", columns={"proj_id"})})
 * @ORM\Entity
 */
class ProjectLabels
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
     * @var \Labels
     *
     * @ORM\ManyToOne(targetEntity="Labels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="label_id", referencedColumnName="id")
     * })
     */
    private $label;

    /**
     * @var \Projects
     *
     * @ORM\ManyToOne(targetEntity="Projects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proj_id", referencedColumnName="id")
     * })
     */
    private $proj;


}
