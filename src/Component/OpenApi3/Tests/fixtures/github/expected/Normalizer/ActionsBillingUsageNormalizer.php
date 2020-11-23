<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ActionsBillingUsage';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ActionsBillingUsage';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ActionsBillingUsage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('total_minutes_used', $data)) {
            $object->setTotalMinutesUsed($data['total_minutes_used']);
        }
        if (\array_key_exists('total_paid_minutes_used', $data)) {
            $object->setTotalPaidMinutesUsed($data['total_paid_minutes_used']);
        }
        if (\array_key_exists('included_minutes', $data)) {
            $object->setIncludedMinutes($data['included_minutes']);
        }
        if (\array_key_exists('minutes_used_breakdown', $data)) {
            $object->setMinutesUsedBreakdown($this->denormalizer->denormalize($data['minutes_used_breakdown'], 'Github\\Model\\ActionsBillingUsageMinutesUsedBreakdown', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTotalMinutesUsed()) {
            $data['total_minutes_used'] = $object->getTotalMinutesUsed();
        }
        if (null !== $object->getTotalPaidMinutesUsed()) {
            $data['total_paid_minutes_used'] = $object->getTotalPaidMinutesUsed();
        }
        if (null !== $object->getIncludedMinutes()) {
            $data['included_minutes'] = $object->getIncludedMinutes();
        }
        if (null !== $object->getMinutesUsedBreakdown()) {
            $data['minutes_used_breakdown'] = $this->normalizer->normalize($object->getMinutesUsedBreakdown(), 'json', $context);
        }
        return $data;
    }
}