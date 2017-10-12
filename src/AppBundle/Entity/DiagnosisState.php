<?php
/**
 * Created by PhpStorm.
 * User: kieran
 * Date: 10/8/2017
 * Time: 2:10 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DiagnosisStateRepository")
 * @ORM\Table(name="diagnosis_state")
 */
class DiagnosisState
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $stateName;

    /**
     * @return string
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * @param string $stateName
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
    }

    /**
     * @ORM\Column(type="text")
     */
    private $notes;

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $pathogens;

    /**
     * @return string
     */
    public function getPathogens()
    {
        return $this->pathogens;
    }

    /**
     * @param string $pathogens
     */
    public function setPathogens($pathogens)
    {
        $this->pathogens = $pathogens;
    }

    /**
     * @ORM\Column(type="text")
     */
    private $empiricTherapy;

    /**
     * @return string
     */
    public function getEmpiricTherapy()
    {
        return $this->empiricTherapy;
    }

    /**
     * @param string $empiricTherapy
     */
    public function setEmpiricTherapy($empiricTherapy)
    {
        $this->empiricTherapy = $empiricTherapy;
    }


}