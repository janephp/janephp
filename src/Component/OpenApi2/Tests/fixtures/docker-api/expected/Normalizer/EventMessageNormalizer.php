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
        $object = new \Docker\Api\Model\EventMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\EventMessageConstraint());
        }
        if (\array_key_exists('Type', $data)) {
            $object->type = $data['Type'];
        }
        if (\array_key_exists('Action', $data)) {
            $object->action = $data['Action'];
        }
        if (\array_key_exists('Actor', $data)) {
            $object->actor = $this->denormalizer->denormalize($data['Actor'], \Docker\Api\Model\EventActor::class, 'json', $context);
        }
        if (\array_key_exists('scope', $data)) {
            $object->scope = $data['scope'];
        }
        if (\array_key_exists('time', $data)) {
            $object->time = $data['time'];
        }
        if (\array_key_exists('timeNano', $data)) {
            $object->timeNano = $data['timeNano'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['Type'] = $data->type ?? null;
        }
        if (array_key_exists('action', get_object_vars($data)) && null !== ($data->action ?? null)) {
            $dataArray['Action'] = $data->action ?? null;
        }
        if (array_key_exists('actor', get_object_vars($data)) && null !== ($data->actor ?? null)) {
            $dataArray['Actor'] = ($data->actor ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->actor ?? null, 'json', $context));
        }
        if (array_key_exists('scope', get_object_vars($data)) && null !== ($data->scope ?? null)) {
            $dataArray['scope'] = $data->scope ?? null;
        }
        if (array_key_exists('time', get_object_vars($data)) && null !== ($data->time ?? null)) {
            $dataArray['time'] = $data->time ?? null;
        }
        if (array_key_exists('timeNano', get_object_vars($data)) && null !== ($data->timeNano ?? null)) {
            $dataArray['timeNano'] = $data->timeNano ?? null;
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