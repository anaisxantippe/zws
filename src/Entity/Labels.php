<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Labels
 *
 * @ORM\Table(name="labels")
 * @ORM\Entity
 */
class Labels
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
     * @ORM\Column(name="label_name", type="string", length=255, nullable=false)
     */
    private $labelName;

    /**
     * @var int
     *
     * @ORM\Column(name="label_color", type="integer", nullable=false)
     */
    private $labelColor;


}
