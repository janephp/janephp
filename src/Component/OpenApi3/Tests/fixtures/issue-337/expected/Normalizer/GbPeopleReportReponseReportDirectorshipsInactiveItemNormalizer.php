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
class GbPeopleReportReponseReportDirectorshipsInactiveItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItem';
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
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('companyName', $data)) {
            $object->setCompanyName($data['companyName']);
            unset($data['companyName']);
        }
        if (\array_key_exists('companyNumber', $data)) {
            $object->setCompanyNumber($data['companyNumber']);
            unset($data['companyNumber']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->setCompanyRegistrationNumber($data['companyRegistrationNumber']);
            unset($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('position', $data)) {
            $object->setPosition($this->denormalizer->denormalize($data['position'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemPosition', 'json', $context));
            unset($data['position']);
        }
        if (\array_key_exists('companyRegistrationDate', $data)) {
            $object->setCompanyRegistrationDate($data['companyRegistrationDate']);
            unset($data['companyRegistrationDate']);
        }
        if (\array_key_exists('netWorth', $data)) {
            $object->setNetWorth($this->denormalizer->denormalize($data['netWorth'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth', 'json', $context));
            unset($data['netWorth']);
        }
        if (\array_key_exists('legalCount', $data)) {
            $object->setLegalCount($data['legalCount']);
            unset($data['legalCount']);
        }
        if (\array_key_exists('creditScore', $data)) {
            $object->setCreditScore($this->denormalizer->denormalize($data['creditScore'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore', 'json', $context));
            unset($data['creditScore']);
        }
        if (\array_key_exists('additionalData', $data)) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additionalData'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData', 'json', $context));
            unset($data['additionalData']);
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
        if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
            $data['companyName'] = $object->getCompanyName();
        }
        if ($object->isInitialized('companyNumber') && null !== $object->getCompanyNumber()) {
            $data['companyNumber'] = $object->getCompanyNumber();
        }
        if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
            $data['companyRegistrationNumber'] = $object->getCompanyRegistrationNumber();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('position') && null !== $object->getPosition()) {
            $data['position'] = $this->normalizer->normalize($object->getPosition(), 'json', $context);
        }
        if ($object->isInitialized('companyRegistrationDate') && null !== $object->getCompanyRegistrationDate()) {
            $data['companyRegistrationDate'] = $object->getCompanyRegistrationDate();
        }
        if ($object->isInitialized('netWorth') && null !== $object->getNetWorth()) {
            $data['netWorth'] = $this->normalizer->normalize($object->getNetWorth(), 'json', $context);
        }
        if ($object->isInitialized('legalCount') && null !== $object->getLegalCount()) {
            $data['legalCount'] = $object->getLegalCount();
        }
        if ($object->isInitialized('creditScore') && null !== $object->getCreditScore()) {
            $data['creditScore'] = $this->normalizer->normalize($object->getCreditScore(), 'json', $context);
        }
        if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
            $data['additionalData'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}