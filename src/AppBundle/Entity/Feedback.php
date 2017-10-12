<?php
/**
 * Created by PhpStorm.
 * User: kieran
 * Date: 10/8/2017
 * Time: 11:45 AM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="feedback")
 *
 * Feedback from users.
 */
class Feedback
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="text", nullable=false)
     *
     * Feedback text.
     */
    public $feedback;

    /**
     * Get the feedback text.
     *
     * @return string
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Set the feedback text.
     *
     * @param string $feedback
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
    }

}