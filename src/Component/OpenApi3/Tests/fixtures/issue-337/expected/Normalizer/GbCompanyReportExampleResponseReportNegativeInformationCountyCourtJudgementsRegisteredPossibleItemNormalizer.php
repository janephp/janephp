<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem';
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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ccjDate', $data)) {
            $object->setCcjDate($data['ccjDate']);
        }
        if (\array_key_exists('court', $data)) {
            $object->setCourt($data['court']);
        }
        if (\array_key_exists('ccjAmount', $data)) {
            $object->setCcjAmount($data['ccjAmount']);
        }
        if (\array_key_exists('caseNumber', $data)) {
            $object->setCaseNumber($data['caseNumber']);
        }
        if (\array_key_exists('ccjStatus', $data)) {
            $object->setCcjStatus($data['ccjStatus']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCcjDate()) {
            $data['ccjDate'] = $object->getCcjDate();
        }
        if (null !== $object->getCourt()) {
            $data['court'] = $object->getCourt();
        }
        if (null !== $object->getCcjAmount()) {
            $data['ccjAmount'] = $object->getCcjAmount();
        }
        if (null !== $object->getCaseNumber()) {
            $data['caseNumber'] = $object->getCaseNumber();
        }
        if (null !== $object->getCcjStatus()) {
            $data['ccjStatus'] = $object->getCcjStatus();
        }
        return $data;
    }
}