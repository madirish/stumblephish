<?php
// src/Group.php

/**
 * @Entity @Table(name="groups")
 **/
class Groups
{
	/**
	 * Many targets have many Groups
	 * Note that the Doctrine mapping table is specified in Target.php
	 */
	private $targets = null;
	
	/**
	 * @access protected
	 * @var int
	 * @Id 
	 * @Column(type="integer") 
	 * @GeneratedValue
	 */
	protected $id = null;
	/**
	 * @access protected
	 * @var string
	 * @Column(type="string") 
	 */
	protected $groups_name;

	public function __construct() {
		$this->targets = new \Doctrine\Common\Collections\ArrayCollection();
		
	}

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->groups_name;
	}

	public function setName($name)
	{
		$this->groups_name = $name;
	}
	
	public function addTarget(Target $target) {
		$target->addGroup($this);
		$this->targets[] = $target;
	}
}