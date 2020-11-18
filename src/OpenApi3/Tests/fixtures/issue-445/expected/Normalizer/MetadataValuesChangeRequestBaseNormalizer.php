<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MetadataValuesChangeRequestBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\MetadataValuesChangeRequestBase';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\MetadataValuesChangeRequestBase';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\MetadataValuesChangeRequestBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('changeCommands', $data)) {
            $values = array();
            foreach ($data['changeCommands'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\MetadataValuesChangeCommandBase', 'json', $context);
            }
            $object->setChangeCommands($values);
        }
        if (\array_key_exists('allowMissingDependencies', $data)) {
            $object->setAllowMissingDependencies($data['allowMissingDependencies']);
        }
        if (\array_key_exists('notifyProgress', $data)) {
            $object->setNotifyProgress($data['notifyProgress']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getChangeCommands() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['changeCommands'] = $values;
        $data['allowMissingDependencies'] = $object->getAllowMissingDependencies();
        $data['notifyProgress'] = $object->getNotifyProgress();
        $data['kind'] = $object->getKind();
        return $data;
    }
}