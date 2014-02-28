<?php
namespace Omeka\Model\Entity;

/**
 * @Entity
 */
class Module extends AbstractEntity
{
    /**
     * @Id
     * @Column(type="string", length=255)
     */
    protected $id;

    /**
     * @Column(type="boolean")
     */
    protected $isActive = false;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = (bool) $isActive;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }
}
