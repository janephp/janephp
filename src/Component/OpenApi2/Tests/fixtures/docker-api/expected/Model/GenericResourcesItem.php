<?php

namespace Docker\Api\Model;

class GenericResourcesItem
{
    /**
     * @var GenericResourcesItemNamedResourceSpec
     */
    public GenericResourcesItemNamedResourceSpec $namedResourceSpec;
    /**
     * @var GenericResourcesItemDiscreteResourceSpec
     */
    public GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec;
}