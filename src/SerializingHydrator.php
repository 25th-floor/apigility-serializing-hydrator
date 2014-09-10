<?php

namespace TwentyFifth\Hydrator;

use TwentyFifth\Serializing\Serializer;
use TwentyFifth\Serializing\SerializingException;
use Zend\Stdlib\Hydrator\HydratorInterface;

class SerializingHydrator
	implements HydratorInterface
{
    /** @var int  */
    public static $steps = 5;

	/**
	 * Extract values from an object
	 *
	 * @param  object $object
	 * @return array
	 */
	public function extract($object)
	{
		return Serializer::serialize($object, self::$steps);
	}

	/**
	 * Hydrate $object with the provided $data.
	 *
	 * @param  array $data
	 * @param  object $object
	 * @throws \TwentyFifth\Serializing\SerializingException
	 * @return object
	 */
	public function hydrate(array $data, $object)
	{
		throw new SerializingException(__CLASS__.' does not support hydration');
	}

}
