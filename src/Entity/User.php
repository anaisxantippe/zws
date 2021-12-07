<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D64986CC499D", columns={"pseudo"})}, indexes={@ORM\Index(name="role_id", columns={"role_id"}), @ORM\Index(name="space_id", columns={"space_id"})})
 * @ORM\Entity
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
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
     * @ORM\Column(name="pseudo", type="string", length=180, nullable=false)
     */
    private $pseudo;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="json", nullable=false)
     */
    private $roles;

    /**
     * @var string The hashed password
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=50, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="pronoun", type="string", length=50, nullable=false)
     */
    private $pronoun;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date", nullable=false)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="first_mail", type="string", length=100, nullable=false)
     */
    private $firstMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="second_mail", type="string", length=100, nullable=true)
     */
    private $secondMail;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=100, nullable=false)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=5, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="member_status", type="string", length=100, nullable=false)
     */
    private $memberStatus;

    /**
     * @var bool
     *
     * @ORM\Column(name="ca", type="boolean", nullable=false)
     */
    private $ca;

    /**
     * @var string
     *
     * @ORM\Column(name="shirt_size", type="string", length=10, nullable=false)
     */
    private $shirtSize;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_color", type="string", length=50, nullable=false)
     */
    private $favColor;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_games", type="string", length=255, nullable=false)
     */
    private $favGames;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=true)
     */
    private $comments;

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
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;

    // setters and getters come next (for some reason Symfony didn't generate them I had to do it manually, probably because I make:crud on User before finishing the database?)

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    public function getPronoun(): ?string
    {
        return $this->pronoun;
    }

    public function setPronoun(string $pronoun): self
    {
        $this->pronoun = $pronoun;
        return $this;
    }

    public function getDob(): ?string
    {
        return $this->dob;
    }

    public function setDob(string $dob): self
    {
        $this->dob = $dob;
        return $this;
    }

    public function getFirstMail(): ?string
    {
        return $this->firstMail;
    }

    public function setFirstMail(string $firstMail): self
    {
        $this->firstMail = $firstMail;
        return $this;
    }

    public function getSecondMail(): ?string
    {
        return $this->secondMail;
    }

    public function setSecondMail(string $secondMail): self
    {
        $this->secondMail = $secondMail;
        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;
        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getMemberStatus(): string
    {
        return $this->memberStatus;
    }

    public function setMemberStatus(string $memberStatus): self
    {
        $this->memberStatus = $memberStatus;
        return $this;
    }

    public function getCa(): ?boolean
    {
        return $this->ca;
    }

    public function setCa(boolean $ca): self
    {
        $this->ca = $ca;
        return $this;
    }

    public function getShirtSize(): ?string
    {
        return $this->shirtSize;
    }

    public function setShirtSize(string $shirtSize): self
    {
        $this->shirtSize = $shirtSize;
        return $this;
    }

    public function getFavColor(): ?string
    {
        return $this->favColor;
    }

    public function setFavColor(string $favColor): self
    {
        $this->favColor = $favColor;
        return $this;
    }

    public function getFavGames(): ?string
    {
        return $this->favGames;
    }

    public function setFavGames(string $favGames): self
    {
        $this->favGames = $favGames;
        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    public function getSpace(): ?int
    {
        return $this->space;
    }

    public function setSpace(int $space): self
    {
        $this->space = $space;
        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->pseudo;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->pseudo;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}