<?php
// src/Target.php

/**
 * @Entity @Table(name="target")
**/
class Target
{
	/**
	 * Many targets have many Groups.
	 * @ManyToMany(targetEntity="Groups")
	 * 
	 */
	private $groups = null;
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
	protected $target_fname;
	/**
	 * @access protected
	 * @var string
	 * @Column(type="string")
	 */
	protected $target_lname;
	/**
	 * @access protected
	 * @var string
	 * @Column(type="string", name="target_email")
	 */
	protected $email;

	public function __construct() {
		$this->groups = new \Doctrine\Common\Collections\ArrayCollection();
		
	}
	public function getId()
	{
		return $this->tid;
	}

	public function getFName()
	{
		return $this->target_fname;
	}

	public function setFName($name)
	{
		$this->target_fname = $name;
	}

	public function getLName()
	{
		return $this->target_lname;
	}

	public function setLName($name)
	{
		$this->target_lname = $name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
	
	public function addGroup(Groups $group) {
		$this->groups[] = $group;
	}
}