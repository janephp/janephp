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
class NetworksCreatePostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\NetworksCreatePostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\NetworksCreatePostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\NetworksCreatePostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('CheckDuplicate', $data) && \is_int($data['CheckDuplicate'])) {
            $data['CheckDuplicate'] = (bool) $data['CheckDuplicate'];
        }
        if (\array_key_exists('Internal', $data) && \is_int($data['Internal'])) {
            $data['Internal'] = (bool) $data['Internal'];
        }
        if (\array_key_exists('Attachable', $data) && \is_int($data['Attachable'])) {
            $data['Attachable'] = (bool) $data['Attachable'];
        }
        if (\array_key_exists('Ingress', $data) && \is_int($data['Ingress'])) {
            $data['Ingress'] = (bool) $data['Ingress'];
        }
        if (\array_key_exists('EnableIPv6', $data) && \is_int($data['EnableIPv6'])) {
            $data['EnableIPv6'] = (bool) $data['EnableIPv6'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\NetworksCreatePostBodyConstraint());
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('CheckDuplicate', $data)) {
            $object->checkDuplicate = $data['CheckDuplicate'];
        }
        if (\array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
        }
        if (\array_key_exists('Internal', $data)) {
            $object->internal = $data['Internal'];
        }
        if (\array_key_exists('Attachable', $data)) {
            $object->attachable = $data['Attachable'];
        }
        if (\array_key_exists('Ingress', $data)) {
            $object->ingress = $data['Ingress'];
        }
        if (\array_key_exists('IPAM', $data)) {
            $object->iPAM = $this->denormalizer->denormalize($data['IPAM'], \Docker\Api\Model\IPAM::class, 'json', $context);
        }
        if (\array_key_exists('EnableIPv6', $data)) {
            $object->enableIPv6 = $data['EnableIPv6'];
        }
        if (\array_key_exists('Options', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Options'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->options = $values;
        }
        if (\array_key_exists('Labels', $data)) {
            $values_1 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->labels = $values_1;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Name'] = $data->name ?? null;
        if (array_key_exists('checkDuplicate', get_object_vars($data)) && null !== ($data->checkDuplicate ?? null)) {
            $dataArray['CheckDuplicate'] = $data->checkDuplicate ?? null;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $dataArray['Driver'] = $data->driver ?? null;
        }
        if (array_key_exists('internal', get_object_vars($data)) && null !== ($data->internal ?? null)) {
            $dataArray['Internal'] = $data->internal ?? null;
        }
        if (array_key_exists('attachable', get_object_vars($data)) && null !== ($data->attachable ?? null)) {
            $dataArray['Attachable'] = $data->attachable ?? null;
        }
        if (array_key_exists('ingress', get_object_vars($data)) && null !== ($data->ingress ?? null)) {
            $dataArray['Ingress'] = $data->ingress ?? null;
        }
        if (array_key_exists('iPAM', get_object_vars($data)) && null !== ($data->iPAM ?? null)) {
            $dataArray['IPAM'] = ($data->iPAM ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->iPAM ?? null, 'json', $context));
        }
        if (array_key_exists('enableIPv6', get_object_vars($data)) && null !== ($data->enableIPv6 ?? null)) {
            $dataArray['EnableIPv6'] = $data->enableIPv6 ?? null;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->options ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Options'] = $values;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values_1 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->labels ?? null as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['Labels'] = $values_1;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\NetworksCreatePostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\NetworksCreatePostBody::class => false];
    }
}