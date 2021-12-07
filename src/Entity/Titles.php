<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Titles
 *
 * @ORM\Table(name="titles")
 * @ORM\Entity
 */
class Titles
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
     * @ORM\Column(name="title_name", type="string", length=255, nullable=false)
     */
    private $titleName;


}
