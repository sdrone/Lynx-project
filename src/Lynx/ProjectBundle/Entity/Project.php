<?php
namespace Lynx\ProjectBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="lynx_project")
 */
class Project {
    
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     */
    private $id;
    

    public function __construct()
    {
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setId($id) {
        $this->id = $id;
    }


    /**
     * Add sprint
     *
     * @param \Lynx\ProjectBundle\Entity\Sprint $sprint
     *
     * @return Project
     */
//    public function addSprint(\Lynx\ProjectBundle\Entity\Sprint $sprint)
//    {
//        $this->sprints[] = $sprint;
//
//        return $this;
//    }

    /**
     * Remove sprint
     *
     * @param \Lynx\ProjectBundle\Entity\Sprint $sprint
     */
//    public function removeSprint(\Lynx\ProjectBundle\Entity\Sprint $sprint)
//    {
//        $this->sprints->removeElement($sprint);
//    }
}
