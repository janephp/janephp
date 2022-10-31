<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\BusinessRule';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRule';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (array_key_exists('kind', $data) and 'BusinessRuleConfigurable' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\BusinessRuleConfigurable', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'BusinessRuleScript' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\BusinessRuleScript', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] !== null) {
            $object->setTriggerPoint($data['triggerPoint']);
        }
        elseif (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] === null) {
            $object->setTriggerPoint(null);
        }
        if (\array_key_exists('isEnabled', $data)) {
            $object->setIsEnabled($data['isEnabled']);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('enableTracing', $data)) {
            $object->setEnableTracing($data['enableTracing']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getKind() and 'BusinessRuleConfigurable' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'BusinessRuleScript' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('triggerPoint') && null !== $object->getTriggerPoint()) {
            $data['triggerPoint'] = $object->getTriggerPoint();
        }
        $data['isEnabled'] = $object->getIsEnabled();
        if ($object->isInitialized('names') && null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['enableTracing'] = $object->getEnableTracing();
        $data['kind'] = $object->getKind();
        return $data;
    }
}