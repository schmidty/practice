<?php

namespace Entity;


use App\Entity;
use Doctrine\ORM\Mapping;


/**
 * @Entity
 * @Table(name="library")
 */
class Library
{
	/**
	 * @var integer
	 *
	 * @Id
	 * @Column(name="book_id", type="integer")
	 * @GeneratedValue(strategy="AUTO")
	 */
	 protected $id;

	 /**
	  *
	  * @var string
	  * @Column(type="string", length=100)
	  */
	 protected $book_name;

	 /**
	  *
	  * @var string
	  * @Column(type="string", length=100)
	  */
	 protected $book_isbn;

	 /**
	  *
	  * @var string
	  * @Column(type="string", length=100)
	  */
	 protected $book_category;
}
