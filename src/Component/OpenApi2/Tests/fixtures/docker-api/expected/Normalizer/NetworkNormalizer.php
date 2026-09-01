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
class NetworkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\Network::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\Network::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\Network();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('EnableIPv6', $data) && \is_int($data['EnableIPv6'])) {
            $data['EnableIPv6'] = (bool) $data['EnableIPv6'];
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\NetworkConstraint());
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Id', $data)) {
            $object->id = $data['Id'];
        }
        if (\array_key_exists('Created', $data)) {
            $object->created = $data['Created'];
        }
        if (\array_key_exists('Scope', $data)) {
            $object->scope = $data['Scope'];
        }
        if (\array_key_exists('Driver', $data)) {
            $object->driver = $data['Driver'];
        }
        if (\array_key_exists('EnableIPv6', $data)) {
            $object->enableIPv6 = $data['EnableIPv6'];
        }
        if (\array_key_exists('IPAM', $data)) {
            $object->iPAM = $this->denormalizer->denormalize($data['IPAM'], \Docker\Api\Model\IPAM::class, 'json', $context);
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
        if (\array_key_exists('Containers', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Containers'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \Docker\Api\Model\NetworkContainer::class, 'json', $context);
            }
            $object->containers = $values;
        }
        if (\array_key_exists('Options', $data)) {
            $values_1 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Options'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->options = $values_1;
        }
        if (\array_key_exists('Labels', $data)) {
            $values_2 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->labels = $values_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['Name'] = $data->name ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['Id'] = $data->id ?? null;
        }
        if (array_key_exists('created', get_object_vars($data)) && null !== ($data->created ?? null)) {
            $dataArray['Created'] = $data->created ?? null;
        }
        if (array_key_exists('scope', get_object_vars($data)) && null !== ($data->scope ?? null)) {
            $dataArray['Scope'] = $data->scope ?? null;
        }
        if (array_key_exists('driver', get_object_vars($data)) && null !== ($data->driver ?? null)) {
            $dataArray['Driver'] = $data->driver ?? null;
        }
        if (array_key_exists('enableIPv6', get_object_vars($data)) && null !== ($data->enableIPv6 ?? null)) {
            $dataArray['EnableIPv6'] = $data->enableIPv6 ?? null;
        }
        if (array_key_exists('iPAM', get_object_vars($data)) && null !== ($data->iPAM ?? null)) {
            $dataArray['IPAM'] = ($data->iPAM ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->iPAM ?? null, 'json', $context));
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
        if (array_key_exists('containers', get_object_vars($data)) && null !== ($data->containers ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->containers ?? null as $key => $value) {
                $values[$key] = $value === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['Containers'] = $values;
        }
        if (array_key_exists('options', get_object_vars($data)) && null !== ($data->options ?? null)) {
            $values_1 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->options ?? null as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['Options'] = $values_1;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values_2 = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->labels ?? null as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $dataArray['Labels'] = $values_2;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\NetworkConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\Network::class => false];
    }
}