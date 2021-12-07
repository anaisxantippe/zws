<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Files
 *
 * @ORM\Table(name="files")
 * @ORM\Entity
 */
class Files
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
     * @ORM\Column(name="file_content", type="string", length=255, nullable=false)
     */
    private $fileContent;


}
