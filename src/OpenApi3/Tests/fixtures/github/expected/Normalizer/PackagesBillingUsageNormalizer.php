<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\PackagesBillingUsage';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PackagesBillingUsage';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\PackagesBillingUsage();
        if (\array_key_exists('total_gigabytes_bandwidth_used', $data)) {
            $object->setTotalGigabytesBandwidthUsed($data['total_gigabytes_bandwidth_used']);
        }
        if (\array_key_exists('total_paid_gigabytes_bandwidth_used', $data)) {
            $object->setTotalPaidGigabytesBandwidthUsed($data['total_paid_gigabytes_bandwidth_used']);
        }
        if (\array_key_exists('included_gigabytes_bandwidth', $data)) {
            $object->setIncludedGigabytesBandwidth($data['included_gigabytes_bandwidth']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTotalGigabytesBandwidthUsed()) {
            $data['total_gigabytes_bandwidth_used'] = $object->getTotalGigabytesBandwidthUsed();
        }
        if (null !== $object->getTotalPaidGigabytesBandwidthUsed()) {
            $data['total_paid_gigabytes_bandwidth_used'] = $object->getTotalPaidGigabytesBandwidthUsed();
        }
        if (null !== $object->getIncludedGigabytesBandwidth()) {
            $data['included_gigabytes_bandwidth'] = $object->getIncludedGigabytesBandwidth();
        }
        return $data;
    }
}