<?php

namespace Ump\TutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ump_tuto_item")
 */
class Item 
{
    /**
     *@ORM\Column(type="integer")
     *@ORM\Id
     *@ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column()
     */
    private $name;
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

}
