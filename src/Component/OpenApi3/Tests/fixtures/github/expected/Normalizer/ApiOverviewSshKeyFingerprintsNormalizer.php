<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiOverviewSshKeyFingerprintsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ApiOverviewSshKeyFingerprints::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ApiOverviewSshKeyFingerprints::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ApiOverviewSshKeyFingerprints();
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
            $this->validate($data, new \Github\Validator\ApiOverviewSshKeyFingerprintsConstraint());
        }
        if (\array_key_exists('MD5_RSA', $data)) {
            $object->setMD5RSA($data['MD5_RSA']);
            unset($data['MD5_RSA']);
        }
        if (\array_key_exists('MD5_DSA', $data)) {
            $object->setMD5DSA($data['MD5_DSA']);
            unset($data['MD5_DSA']);
        }
        if (\array_key_exists('SHA256_RSA', $data)) {
            $object->setSHA256RSA($data['SHA256_RSA']);
            unset($data['SHA256_RSA']);
        }
        if (\array_key_exists('SHA256_DSA', $data)) {
            $object->setSHA256DSA($data['SHA256_DSA']);
            unset($data['SHA256_DSA']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('mD5RSA') && null !== $data->getMD5RSA()) {
            $dataArray['MD5_RSA'] = $data->getMD5RSA();
        }
        if ($data->isInitialized('mD5DSA') && null !== $data->getMD5DSA()) {
            $dataArray['MD5_DSA'] = $data->getMD5DSA();
        }
        if ($data->isInitialized('sHA256RSA') && null !== $data->getSHA256RSA()) {
            $dataArray['SHA256_RSA'] = $data->getSHA256RSA();
        }
        if ($data->isInitialized('sHA256DSA') && null !== $data->getSHA256DSA()) {
            $dataArray['SHA256_DSA'] = $data->getSHA256DSA();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ApiOverviewSshKeyFingerprintsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ApiOverviewSshKeyFingerprints::class => false];
    }
}