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
class PackagesBillingUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\PackagesBillingUsage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\PackagesBillingUsage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\PackagesBillingUsage();
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
            $this->validate($data, new \Github\Validator\PackagesBillingUsageConstraint());
        }
        if (\array_key_exists('total_gigabytes_bandwidth_used', $data)) {
            $object->setTotalGigabytesBandwidthUsed($data['total_gigabytes_bandwidth_used']);
            unset($data['total_gigabytes_bandwidth_used']);
        }
        if (\array_key_exists('total_paid_gigabytes_bandwidth_used', $data)) {
            $object->setTotalPaidGigabytesBandwidthUsed($data['total_paid_gigabytes_bandwidth_used']);
            unset($data['total_paid_gigabytes_bandwidth_used']);
        }
        if (\array_key_exists('included_gigabytes_bandwidth', $data)) {
            $object->setIncludedGigabytesBandwidth($data['included_gigabytes_bandwidth']);
            unset($data['included_gigabytes_bandwidth']);
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
        if ($data->isInitialized('totalGigabytesBandwidthUsed') && null !== $data->getTotalGigabytesBandwidthUsed()) {
            $dataArray['total_gigabytes_bandwidth_used'] = $data->getTotalGigabytesBandwidthUsed();
        }
        if ($data->isInitialized('totalPaidGigabytesBandwidthUsed') && null !== $data->getTotalPaidGigabytesBandwidthUsed()) {
            $dataArray['total_paid_gigabytes_bandwidth_used'] = $data->getTotalPaidGigabytesBandwidthUsed();
        }
        if ($data->isInitialized('includedGigabytesBandwidth') && null !== $data->getIncludedGigabytesBandwidth()) {
            $dataArray['included_gigabytes_bandwidth'] = $data->getIncludedGigabytesBandwidth();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\PackagesBillingUsageConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\PackagesBillingUsage::class => false];
    }
}