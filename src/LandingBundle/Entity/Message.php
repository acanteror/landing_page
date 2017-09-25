<?php
namespace LandingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="LandingBundle\Repository\MessageRepository")
 * @ORM\Table(name="messages")
 */

class Message{

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="string")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Kiefernwald\DoctrineUuid\Doctrine\ORM\UuidGenerator")
     */
    protected $id;

    /**
     * @ORM\Column(name="name", type="string", length=60)
     */
    protected $name;

    /**
     * @ORM\Column(name="surname", type="string", length=60)
     */
    protected $surname;

    /**
     * @ORM\Column(name="phone", type="string", length=9, nullable=true)
     */
    protected $phone;

    /**
     * @ORM\Column(name="email", type="string", length=60)
     */
    protected $email;

    /**
     * @var typeVehicle
     * @ORM\ManyToOne(targetEntity="LandingBundle\Entity\TypeVehicle")
     * @ORM\JoinColumn(name="typeVehicle_id",referencedColumnName="id")
     */
    private $typeVehicle;

    /**
     * @var vehicle
     * @ORM\ManyToOne(targetEntity="LandingBundle\Entity\Vehicle")
     * @ORM\JoinColumn(name="vehicle_id",referencedColumnName="id")
     */
    private $vehicle;

    /**
     * @var preference
     * @ORM\ManyToOne(targetEntity="LandingBundle\Entity\Preference")
     * @ORM\JoinColumn(name="preference_id", referencedColumnName="id")
     */
    private $preference;

    function __construct(){}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return typeVehicle
     */
    public function getTypeVehicle()
    {
        return $this->typeVehicle;
    }

    /**
     * @param typeVehicle $typeVehicle
     */
    public function setTypeVehicle($typeVehicle)
    {
        $this->typeVehicle = $typeVehicle;
    }

    /**
     * @return vehicle
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * @param vehicle $vehicle
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @return preference
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * @param preference $preference
     */
    public function setPreference($preference)
    {
        $this->preference = $preference;
    }

    public function __toString()
    {
        return $this->getName();
    }


}