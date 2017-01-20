<?php
// src/Group.php

/**
 * @Entity @Table(name="groups")
 **/
class Groups
{
	/**
	 * @access protected
	 * @var int
	 * @Id 
	 * @Column(type="integer") 
	 * @GeneratedValue
	 */
	protected $groups_id = null;
	/**
	 * @access protected
	 * @var string
	 * @Column(type="string") 
	 */
	protected $groups_name;

	public function getId()
	{
		return $this->groups_id;
	}

	public function getName()
	{
		return $this->groups_name;
	}

	public function setName($name)
	{
		$this->groups_name = $name;
	}
}