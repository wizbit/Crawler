<?php

namespace Mjs\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Link
 * @package Mjs\Entity
 *
 * @ORM\Entity(repositoryClass="Mjs\Repository\LinkRepository")
 * @ORM\Table(name="links")
 */
class Link
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $uri;

	/**
	 * @ORM\Column(type="datetime")
	 * @var \DateTime
	 */
	protected $visited;

	protected $domain;

	public function __construct($uri)
	{
		$this->uri = $uri;
	}

	public function getUri()
	{
		return $this->uri;
	}
} 