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
            $object->setNodeCertExpiry($data['NodeCertExpiry']);
        }
        if (\array_key_exists('ExternalCAs', $data)) {
            $values = [];
            foreach ($data['ExternalCAs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\SwarmSpecCAConfigExternalCAsItem::class, 'json', $context);
            }
            $object->setExternalCAs($values);
        }
        if (\array_key_exists('SigningCACert', $data)) {
            $object->setSigningCACert($data['SigningCACert']);
        }
        if (\array_key_exists('SigningCAKey', $data)) {
            $object->setSigningCAKey($data['SigningCAKey']);
        }
        if (\array_key_exists('ForceRotate', $data)) {
            $object->setForceRotate($data['ForceRotate']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('nodeCertExpiry') && null !== $data->getNodeCertExpiry()) {
            $dataArray['NodeCertExpiry'] = $data->getNodeCertExpiry();
        }
        if ($data->isInitialized('externalCAs') && null !== $data->getExternalCAs()) {
            $values = [];
            foreach ($data->getExternalCAs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['ExternalCAs'] = $values;
        }
        if ($data->isInitialized('signingCACert') && null !== $data->getSigningCACert()) {
            $dataArray['SigningCACert'] = $data->getSigningCACert();
        }
        if ($data->isInitialized('signingCAKey') && null !== $data->getSigningCAKey()) {
            $dataArray['SigningCAKey'] = $data->getSigningCAKey();
        }
        if ($data->isInitialized('forceRotate') && null !== $data->getForceRotate()) {
            $dataArray['ForceRotate'] = $data->getForceRotate();
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