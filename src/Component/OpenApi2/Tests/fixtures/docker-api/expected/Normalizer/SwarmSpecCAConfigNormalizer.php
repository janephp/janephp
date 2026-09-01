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
class SwarmSpecCAConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SwarmSpecCAConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SwarmSpecCAConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SwarmSpecCAConfig();
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
            $this->validate($data, new \Docker\Api\Validator\SwarmSpecCAConfigConstraint());
        }
        if (\array_key_exists('NodeCertExpiry', $data)) {
            $object->nodeCertExpiry = $data['NodeCertExpiry'];
        }
        if (\array_key_exists('ExternalCAs', $data)) {
            $values = [];
            foreach ($data['ExternalCAs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\SwarmSpecCAConfigExternalCAsItem::class, 'json', $context);
            }
            $object->externalCAs = $values;
        }
        if (\array_key_exists('SigningCACert', $data)) {
            $object->signingCACert = $data['SigningCACert'];
        }
        if (\array_key_exists('SigningCAKey', $data)) {
            $object->signingCAKey = $data['SigningCAKey'];
        }
        if (\array_key_exists('ForceRotate', $data)) {
            $object->forceRotate = $data['ForceRotate'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('nodeCertExpiry', get_object_vars($data)) && null !== ($data->nodeCertExpiry ?? null)) {
            $dataArray['NodeCertExpiry'] = $data->nodeCertExpiry ?? null;
        }
        if (array_key_exists('externalCAs', get_object_vars($data)) && null !== ($data->externalCAs ?? null)) {
            $values = [];
            foreach ($data->externalCAs ?? null as $value) {
                $values[] = $value === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['ExternalCAs'] = $values;
        }
        if (array_key_exists('signingCACert', get_object_vars($data)) && null !== ($data->signingCACert ?? null)) {
            $dataArray['SigningCACert'] = $data->signingCACert ?? null;
        }
        if (array_key_exists('signingCAKey', get_object_vars($data)) && null !== ($data->signingCAKey ?? null)) {
            $dataArray['SigningCAKey'] = $data->signingCAKey ?? null;
        }
        if (array_key_exists('forceRotate', get_object_vars($data)) && null !== ($data->forceRotate ?? null)) {
            $dataArray['ForceRotate'] = $data->forceRotate ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SwarmSpecCAConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SwarmSpecCAConfig::class => false];
    }
}