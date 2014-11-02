<?php

namespace TwentyFifth\Hydrator;

interface SerializingHydratorAware
{
    /**
     * @param SerializingHydrator $hydrator
     */
    public function setSerializingHydrator(SerializingHydrator $hydrator);

    /**
     * @return SerializingHydrator
     */
    public function getSerializingHydrator();
}
