<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\Event';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Event';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Event();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\EventConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('actor', $data)) {
            $object->setActor($this->denormalizer->denormalize($data['actor'], 'Github\\Model\\Actor', 'json', $context));
            unset($data['actor']);
        }
        if (\array_key_exists('repo', $data)) {
            $object->setRepo($this->denormalizer->denormalize($data['repo'], 'Github\\Model\\EventRepo', 'json', $context));
            unset($data['repo']);
        }
        if (\array_key_exists('org', $data)) {
            $object->setOrg($this->denormalizer->denormalize($data['org'], 'Github\\Model\\Actor', 'json', $context));
            unset($data['org']);
        }
        if (\array_key_exists('payload', $data)) {
            $object->setPayload($this->denormalizer->denormalize($data['payload'], 'Github\\Model\\EventPayload', 'json', $context));
            unset($data['payload']);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
            unset($data['public']);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['type'] = $object->getType();
        $data['actor'] = $object->getActor() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getActor(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['repo'] = $object->getRepo() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getRepo(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        if ($object->isInitialized('org') && null !== $object->getOrg()) {
            $data['org'] = $object->getOrg() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getOrg(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['payload'] = $object->getPayload() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getPayload(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['public'] = $object->getPublic();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\EventConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\Event' => false);
    }
}