<?php

namespace phpqbo\Entities;

use IdType;

/**
* Entity Abstract Class
*/
abstract class Entity
{
	const ID         = 'Id';
	const SYNC_TOKEN = 'SyncToken';

	public $attributes = array(
		self::ID,
		self::SYNC_TOKEN,
	);

	/** @var  IdType */
	protected $id;

	/** @var string */
	protected $syncToken;

	public function validate()
	{

	}

	public function isNew()
	{
		
	}
}