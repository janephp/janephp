<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportNegativeInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformation';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ccjSummary', $data)) {
            $object->setCcjSummary($this->denormalizer->denormalize($data['ccjSummary'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCcjSummary', 'json', $context));
        }
        if (\array_key_exists('countyCourtJudgements', $data)) {
            $object->setCountyCourtJudgements($this->denormalizer->denormalize($data['countyCourtJudgements'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgements', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCcjSummary()) {
            $data['ccjSummary'] = $this->normalizer->normalize($object->getCcjSummary(), 'json', $context);
        }
        if (null !== $object->getCountyCourtJudgements()) {
            $data['countyCourtJudgements'] = $this->normalizer->normalize($object->getCountyCourtJudgements(), 'json', $context);
        }
        return $data;
    }
}