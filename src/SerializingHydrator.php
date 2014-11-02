<?php

namespace TwentyFifth\Hydrator;

use TwentyFifth\Serializing\Serializer;
use TwentyFifth\Serializing\SerializerAware;
use TwentyFifth\Serializing\SerializerAwareTrait;
use Zend\Stdlib\Hydrator\HydratorInterface;

class SerializingHydrator
    implements HydratorInterface, SerializerAware
{
    use SerializerAwareTrait;

    /** @var int */
    private $steps = 5;

    function __construct(Serializer $serializer)
    {
        $this->setSerializer($serializer);
    }


    /**
     * @return int
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param int $steps
     *
     * @return SerializingHydrator
     */
    public function setSteps($steps)
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * Extract values from an object
     *
     * @param  object $object
     *
     * @return array
     */
    public function extract($object)
    {
	    return $this->getSerializer()->serialize($object, $this->steps);
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array  $data
     * @param  object $object
     *
     * @throws \TwentyFifth\Serializing\SerializingException
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        throw new SerializingException(__CLASS__ . ' does not support hydration');
    }

}
