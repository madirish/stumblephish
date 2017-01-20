<?php
// src/Target.php

/**
 * @Entity @Table(name="groups")
**/
class Target
{
	/**
	 * Many targets have many Groups.
	 * @ManyToMany(targetEntity="Groups", inverseBy="target")
	 * @JoinTable(name="target_x_groups")
	 */
	private $groups = null;
	/**
	 * @access protected
	 * @var int
	 * @Id 
	 * @Column(type="integer") 
	 * @GeneratedValue
	 */
	protected $target_id = null;
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
		$this->groups = new \Dcotrine\Common\Collections\ArrayCollection();
		
	}
	public function getId()
	{
		return $this->target_id;
	}

	public function getFName()
	{
		return $this->target_fname;
	}

	public function setFName($name)
	{
		$this->target_fname = $name;
	}

	public function getFLName()
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
	
	public function addGroup(Group $group) {
		$this->groups[] = $group;
	}
}