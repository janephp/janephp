<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DeleteRulesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DeleteRulesRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DeleteRulesRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\DeleteRulesRequest();
        if (property_exists($data, 'ids')) {
            $values = array();
            foreach ($data->{'ids'} as $value) {
                $values[] = $value;
            }
            $object->setIds($values);
        }
        if (property_exists($data, 'values')) {
            $values_1 = array();
            foreach ($data->{'values'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setValues($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIds()) {
            $values = array();
            foreach ($object->getIds() as $value) {
                $values[] = $value;
            }
            $data->{'ids'} = $values;
        }
        if (null !== $object->getValues()) {
            $values_1 = array();
            foreach ($object->getValues() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'values'} = $values_1;
        }
        return $data;
    }
}