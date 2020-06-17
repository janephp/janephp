<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportCreditScoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScore';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScore();
        if (\array_key_exists('currentCreditRating', $data)) {
            $object->setCurrentCreditRating($this->denormalizer->denormalize($data['currentCreditRating'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating', 'json', $context));
        }
        if (\array_key_exists('currentContractLimit', $data)) {
            $object->setCurrentContractLimit($this->denormalizer->denormalize($data['currentContractLimit'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentContractLimit', 'json', $context));
        }
        if (\array_key_exists('previousCreditRating', $data)) {
            $object->setPreviousCreditRating($this->denormalizer->denormalize($data['previousCreditRating'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating', 'json', $context));
        }
        if (\array_key_exists('latestRatingChangeDate', $data)) {
            $object->setLatestRatingChangeDate($data['latestRatingChangeDate']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCurrentCreditRating()) {
            $data['currentCreditRating'] = $this->normalizer->normalize($object->getCurrentCreditRating(), 'json', $context);
        }
        if (null !== $object->getCurrentContractLimit()) {
            $data['currentContractLimit'] = $this->normalizer->normalize($object->getCurrentContractLimit(), 'json', $context);
        }
        if (null !== $object->getPreviousCreditRating()) {
            $data['previousCreditRating'] = $this->normalizer->normalize($object->getPreviousCreditRating(), 'json', $context);
        }
        if (null !== $object->getLatestRatingChangeDate()) {
            $data['latestRatingChangeDate'] = $object->getLatestRatingChangeDate();
        }
        return $data;
    }
}