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
class ActionsBillingUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ActionsBillingUsage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ActionsBillingUsage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ActionsBillingUsage();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ActionsBillingUsageConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('total_minutes_used', $data)) {
            $object->setTotalMinutesUsed($data['total_minutes_used']);
            unset($data['total_minutes_used']);
        }
        if (\array_key_exists('total_paid_minutes_used', $data)) {
            $object->setTotalPaidMinutesUsed($data['total_paid_minutes_used']);
            unset($data['total_paid_minutes_used']);
        }
        if (\array_key_exists('included_minutes', $data)) {
            $object->setIncludedMinutes($data['included_minutes']);
            unset($data['included_minutes']);
        }
        if (\array_key_exists('minutes_used_breakdown', $data)) {
            $object->setMinutesUsedBreakdown($this->denormalizer->denormalize($data['minutes_used_breakdown'], \Github\Model\ActionsBillingUsageMinutesUsedBreakdown::class, 'json', $context));
            unset($data['minutes_used_breakdown']);
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
        if ($data->isInitialized('totalMinutesUsed') && null !== $data->getTotalMinutesUsed()) {
            $dataArray['total_minutes_used'] = $data->getTotalMinutesUsed();
        }
        if ($data->isInitialized('totalPaidMinutesUsed') && null !== $data->getTotalPaidMinutesUsed()) {
            $dataArray['total_paid_minutes_used'] = $data->getTotalPaidMinutesUsed();
        }
        if ($data->isInitialized('includedMinutes') && null !== $data->getIncludedMinutes()) {
            $dataArray['included_minutes'] = $data->getIncludedMinutes();
        }
        if ($data->isInitialized('minutesUsedBreakdown') && null !== $data->getMinutesUsedBreakdown()) {
            $dataArray['minutes_used_breakdown'] = $this->normalizer->normalize($data->getMinutesUsedBreakdown(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ActionsBillingUsageConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ActionsBillingUsage::class => false];
    }
}