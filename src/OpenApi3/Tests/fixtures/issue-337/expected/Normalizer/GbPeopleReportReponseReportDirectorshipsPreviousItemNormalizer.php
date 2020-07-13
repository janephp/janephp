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
class GbPeopleReportReponseReportDirectorshipsPreviousItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItem();
        if (\array_key_exists('companyName', $data)) {
            $object->setCompanyName($data['companyName']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->setCompanyRegistrationNumber($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($this->denormalizer->denormalize($data['position'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemPosition', 'json', $context));
        }
        if (\array_key_exists('companyRegistrationDate', $data)) {
            $object->setCompanyRegistrationDate($data['companyRegistrationDate']);
        }
        if (\array_key_exists('latestTurnoverFigure', $data)) {
            $object->setLatestTurnoverFigure($this->denormalizer->denormalize($data['latestTurnoverFigure'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure', 'json', $context));
        }
        if (\array_key_exists('netWorth', $data)) {
            $object->setNetWorth($this->denormalizer->denormalize($data['netWorth'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemNetWorth', 'json', $context));
        }
        if (\array_key_exists('legalCount', $data)) {
            $object->setLegalCount($data['legalCount']);
        }
        if (\array_key_exists('creditScore', $data)) {
            $object->setCreditScore($this->denormalizer->denormalize($data['creditScore'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemCreditScore', 'json', $context));
        }
        if (\array_key_exists('additionalData', $data)) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additionalData'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemAdditionalData', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCompanyName()) {
            $data['companyName'] = $object->getCompanyName();
        }
        if (null !== $object->getCompanyRegistrationNumber()) {
            $data['companyRegistrationNumber'] = $object->getCompanyRegistrationNumber();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $this->normalizer->normalize($object->getPosition(), 'json', $context);
        }
        if (null !== $object->getCompanyRegistrationDate()) {
            $data['companyRegistrationDate'] = $object->getCompanyRegistrationDate();
        }
        if (null !== $object->getLatestTurnoverFigure()) {
            $data['latestTurnoverFigure'] = $this->normalizer->normalize($object->getLatestTurnoverFigure(), 'json', $context);
        }
        if (null !== $object->getNetWorth()) {
            $data['netWorth'] = $this->normalizer->normalize($object->getNetWorth(), 'json', $context);
        }
        if (null !== $object->getLegalCount()) {
            $data['legalCount'] = $object->getLegalCount();
        }
        if (null !== $object->getCreditScore()) {
            $data['creditScore'] = $this->normalizer->normalize($object->getCreditScore(), 'json', $context);
        }
        if (null !== $object->getAdditionalData()) {
            $data['additionalData'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
        }
        return $data;
    }
}