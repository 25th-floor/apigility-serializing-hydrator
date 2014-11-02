<?php

namespace TwentyFifth\Hydrator;

trait SerializingHydratorAwareTrait
{
    /** @var  SerializingHydrator */
    private $serializingHydrator;

    /**
     * @param SerializingHydrator $hydrator
     */
    public function setSerializingHydrator(SerializingHydrator $hydrator)
    {
        $this->serializingHydrator = $hydrator;

        return $this;
    }

    /**
     * @return SerializingHydrator
     */
    public function getSerializingHydrator()
    {
        return $this->serializingHydrator;
    }

}
