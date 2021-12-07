<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Icons
 *
 * @ORM\Table(name="icons")
 * @ORM\Entity
 */
class Icons
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
     * @ORM\Column(name="icon_content", type="string", length=255, nullable=false)
     */
    private $iconContent;


}
