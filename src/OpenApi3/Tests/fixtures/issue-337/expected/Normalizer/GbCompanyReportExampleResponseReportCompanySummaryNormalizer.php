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
class GbCompanyReportExampleResponseReportCompanySummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanySummary';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanySummary';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanySummary();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('businessName', $data)) {
            $object->setBusinessName($data['businessName']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
        }
        if (\array_key_exists('companyNumber', $data)) {
            $object->setCompanyNumber($data['companyNumber']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->setCompanyRegistrationNumber($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('mainActivity', $data)) {
            $object->setMainActivity($this->denormalizer->denormalize($data['mainActivity'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanySummaryMainActivity', 'json', $context));
        }
        if (\array_key_exists('companyStatus', $data)) {
            $object->setCompanyStatus($this->denormalizer->denormalize($data['companyStatus'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanySummaryCompanyStatus', 'json', $context));
        }
        if (\array_key_exists('latestTurnoverFigure', $data)) {
            $object->setLatestTurnoverFigure($this->denormalizer->denormalize($data['latestTurnoverFigure'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanySummaryLatestTurnoverFigure', 'json', $context));
        }
        if (\array_key_exists('latestShareholdersEquityFigure', $data)) {
            $object->setLatestShareholdersEquityFigure($this->denormalizer->denormalize($data['latestShareholdersEquityFigure'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanySummaryLatestShareholdersEquityFigure', 'json', $context));
        }
        if (\array_key_exists('creditRating', $data)) {
            $object->setCreditRating($this->denormalizer->denormalize($data['creditRating'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanySummaryCreditRating', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBusinessName()) {
            $data['businessName'] = $object->getBusinessName();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getCompanyNumber()) {
            $data['companyNumber'] = $object->getCompanyNumber();
        }
        if (null !== $object->getCompanyRegistrationNumber()) {
            $data['companyRegistrationNumber'] = $object->getCompanyRegistrationNumber();
        }
        if (null !== $object->getMainActivity()) {
            $data['mainActivity'] = $this->normalizer->normalize($object->getMainActivity(), 'json', $context);
        }
        if (null !== $object->getCompanyStatus()) {
            $data['companyStatus'] = $this->normalizer->normalize($object->getCompanyStatus(), 'json', $context);
        }
        if (null !== $object->getLatestTurnoverFigure()) {
            $data['latestTurnoverFigure'] = $this->normalizer->normalize($object->getLatestTurnoverFigure(), 'json', $context);
        }
        if (null !== $object->getLatestShareholdersEquityFigure()) {
            $data['latestShareholdersEquityFigure'] = $this->normalizer->normalize($object->getLatestShareholdersEquityFigure(), 'json', $context);
        }
        if (null !== $object->getCreditRating()) {
            $data['creditRating'] = $this->normalizer->normalize($object->getCreditRating(), 'json', $context);
        }
        return $data;
    }
}