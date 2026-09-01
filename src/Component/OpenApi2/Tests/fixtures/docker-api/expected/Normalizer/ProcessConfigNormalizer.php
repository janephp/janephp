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
class ProcessConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ProcessConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ProcessConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ProcessConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('privileged', $data) && \is_int($data['privileged'])) {
            $data['privileged'] = (bool) $data['privileged'];
        }
        if (\array_key_exists('tty', $data) && \is_int($data['tty'])) {
            $data['tty'] = (bool) $data['tty'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ProcessConfigConstraint());
        }
        if (\array_key_exists('privileged', $data)) {
            $object->privileged = $data['privileged'];
        }
        if (\array_key_exists('user', $data)) {
            $object->user = $data['user'];
        }
        if (\array_key_exists('tty', $data)) {
            $object->tty = $data['tty'];
        }
        if (\array_key_exists('entrypoint', $data)) {
            $object->entrypoint = $data['entrypoint'];
        }
        if (\array_key_exists('arguments', $data)) {
            $values = [];
            foreach ($data['arguments'] as $value) {
                $values[] = $value;
            }
            $object->arguments = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('privileged', get_object_vars($data)) && null !== ($data->privileged ?? null)) {
            $dataArray['privileged'] = $data->privileged ?? null;
        }
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['user'] = $data->user ?? null;
        }
        if (array_key_exists('tty', get_object_vars($data)) && null !== ($data->tty ?? null)) {
            $dataArray['tty'] = $data->tty ?? null;
        }
        if (array_key_exists('entrypoint', get_object_vars($data)) && null !== ($data->entrypoint ?? null)) {
            $dataArray['entrypoint'] = $data->entrypoint ?? null;
        }
        if (array_key_exists('arguments', get_object_vars($data)) && null !== ($data->arguments ?? null)) {
            $values = [];
            foreach ($data->arguments ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['arguments'] = $values;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ProcessConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ProcessConfig::class => false];
    }
}