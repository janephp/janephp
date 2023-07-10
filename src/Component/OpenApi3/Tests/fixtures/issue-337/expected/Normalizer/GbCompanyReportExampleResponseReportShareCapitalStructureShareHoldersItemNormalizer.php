<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem();
        if (\array_key_exists('totalNumberOfSharesOwned', $data) && \is_int($data['totalNumberOfSharesOwned'])) {
            $data['totalNumberOfSharesOwned'] = (double) $data['totalNumberOfSharesOwned'];
        }
        if (\array_key_exists('percentSharesHeld', $data) && \is_int($data['percentSharesHeld'])) {
            $data['percentSharesHeld'] = (double) $data['percentSharesHeld'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('shareholderType', $data)) {
            $object->setShareholderType($data['shareholderType']);
            unset($data['shareholderType']);
        }
        if (\array_key_exists('shareType', $data)) {
            $object->setShareType($data['shareType']);
            unset($data['shareType']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        }
        if (\array_key_exists('totalNumberOfSharesOwned', $data)) {
            $object->setTotalNumberOfSharesOwned($data['totalNumberOfSharesOwned']);
            unset($data['totalNumberOfSharesOwned']);
        }
        if (\array_key_exists('percentSharesHeld', $data)) {
            $object->setPercentSharesHeld($data['percentSharesHeld']);
            unset($data['percentSharesHeld']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('shareholderType') && null !== $object->getShareholderType()) {
            $data['shareholderType'] = $object->getShareholderType();
        }
        if ($object->isInitialized('shareType') && null !== $object->getShareType()) {
            $data['shareType'] = $object->getShareType();
        }
        if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if ($object->isInitialized('totalNumberOfSharesOwned') && null !== $object->getTotalNumberOfSharesOwned()) {
            $data['totalNumberOfSharesOwned'] = $object->getTotalNumberOfSharesOwned();
        }
        if ($object->isInitialized('percentSharesHeld') && null !== $object->getPercentSharesHeld()) {
            $data['percentSharesHeld'] = $object->getPercentSharesHeld();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem' => false);
    }
}