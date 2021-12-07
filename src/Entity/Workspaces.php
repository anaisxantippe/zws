<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workspaces
 *
 * @ORM\Table(name="workspaces", indexes={@ORM\Index(name="icon_id", columns={"icon_id"})})
 * @ORM\Entity
 */
class Workspaces
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
     * @ORM\Column(name="space_name", type="string", length=255, nullable=false)
     */
    private $spaceName;

    /**
     * @var string
     *
     * @ORM\Column(name="space_desc", type="string", length=255, nullable=false)
     */
    private $spaceDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="space_color", type="string", length=255, nullable=false)
     */
    private $spaceColor;

    /**
     * @var \Icons
     *
     * @ORM\ManyToOne(targetEntity="Icons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="icon_id", referencedColumnName="id")
     * })
     */
    private $icon;


}
