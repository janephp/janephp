<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\EventMessage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\EventMessage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\EventMessage();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\EventMessageConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Type', $data)) {
            $object->setType($data['Type']);
        }
        if (\array_key_exists('Action', $data)) {
            $object->setAction($data['Action']);
        }
        if (\array_key_exists('Actor', $data)) {
            $object->setActor($this->denormalizer->denormalize($data['Actor'], \Docker\Api\Model\EventActor::class, 'json', $context));
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($data['scope']);
        }
        if (\array_key_exists('time', $data)) {
            $object->setTime($data['time']);
        }
        if (\array_key_exists('timeNano', $data)) {
            $object->setTimeNano($data['timeNano']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['Type'] = $data->getType();
        }
        if ($data->isInitialized('action') && null !== $data->getAction()) {
            $dataArray['Action'] = $data->getAction();
        }
        if ($data->isInitialized('actor') && null !== $data->getActor()) {
            $dataArray['Actor'] = $this->normalizer->normalize($data->getActor(), 'json', $context);
        }
        if ($data->isInitialized('scope') && null !== $data->getScope()) {
            $dataArray['scope'] = $data->getScope();
        }
        if ($data->isInitialized('time') && null !== $data->getTime()) {
            $dataArray['time'] = $data->getTime();
        }
        if ($data->isInitialized('timeNano') && null !== $data->getTimeNano()) {
            $dataArray['timeNano'] = $data->getTimeNano();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\EventMessageConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\EventMessage::class => false];
    }
}