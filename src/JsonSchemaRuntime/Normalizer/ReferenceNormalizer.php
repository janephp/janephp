<?php

namespace Jane\JsonSchemaRuntime\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ReferenceNormalizer implements NormalizerInterface
{
    /**
     * {@inheritDoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $ref = new \stdClass();
        $ref->{'$ref'} = (string) $object->getReferenceUri();

        return $ref;
    }

    /**
     * {@inheritDoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return ($data instanceof Reference);
    }

}
