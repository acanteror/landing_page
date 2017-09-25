<?php
namespace LandingBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="LandingBundle\Repository\VehicleRepository")
 * @ORM\Table(name="vehicles")
 */
class Vehicle
{

    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var typeVehicle
     * @ORM\ManyToOne(targetEntity="LandingBundle\Entity\TypeVehicle", inversedBy="vehicles")
     * @ORM\JoinColumn(name="typeVehicle_id",referencedColumnName="id")
     */
    private $typeVehicle;

    /**
     * @var ArrayCollection<Message>
     * @ORM\OneToMany(targetEntity="LandingBundle\Entity\Message",mappedBy="vehicle")
     */
    private $message;

    function __construct(){}

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
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
     * @return ArrayCollection
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param ArrayCollection $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function __toString()    {
        return $this->name;
    }

}//class