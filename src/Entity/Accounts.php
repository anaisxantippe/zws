<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts", indexes={@ORM\Index(name="title_id", columns={"title_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Accounts
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
     * @var bool
     *
     * @ORM\Column(name="membership", type="boolean", nullable=false)
     */
    private $membership;

    /**
     * @var float
     *
     * @ORM\Column(name="donation_amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $donationAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="pp", type="string", length=255, nullable=false)
     */
    private $pp;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Titles
     *
     * @ORM\ManyToOne(targetEntity="Titles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="title_id", referencedColumnName="id")
     * })
     */
    private $title;


}
