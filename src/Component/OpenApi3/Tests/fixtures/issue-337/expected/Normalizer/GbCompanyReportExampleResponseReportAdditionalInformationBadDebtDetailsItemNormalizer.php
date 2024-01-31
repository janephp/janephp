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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('statementDate', $data)) {
                $object->setStatementDate($data['statementDate']);
                unset($data['statementDate']);
            }
            if (\array_key_exists('registrationNumber', $data)) {
                $object->setRegistrationNumber($data['registrationNumber']);
                unset($data['registrationNumber']);
            }
            if (\array_key_exists('companyName', $data)) {
                $object->setCompanyName($data['companyName']);
                unset($data['companyName']);
            }
            if (\array_key_exists('amount', $data)) {
                $object->setAmount($this->denormalizer->denormalize($data['amount'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount', 'json', $context));
                unset($data['amount']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('statementDate') && null !== $object->getStatementDate()) {
                $data['statementDate'] = $object->getStatementDate();
            }
            if ($object->isInitialized('registrationNumber') && null !== $object->getRegistrationNumber()) {
                $data['registrationNumber'] = $object->getRegistrationNumber();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['companyName'] = $object->getCompanyName();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem' => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('statementDate', $data)) {
                $object->setStatementDate($data['statementDate']);
                unset($data['statementDate']);
            }
            if (\array_key_exists('registrationNumber', $data)) {
                $object->setRegistrationNumber($data['registrationNumber']);
                unset($data['registrationNumber']);
            }
            if (\array_key_exists('companyName', $data)) {
                $object->setCompanyName($data['companyName']);
                unset($data['companyName']);
            }
            if (\array_key_exists('amount', $data)) {
                $object->setAmount($this->denormalizer->denormalize($data['amount'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount', 'json', $context));
                unset($data['amount']);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('statementDate') && null !== $object->getStatementDate()) {
                $data['statementDate'] = $object->getStatementDate();
            }
            if ($object->isInitialized('registrationNumber') && null !== $object->getRegistrationNumber()) {
                $data['registrationNumber'] = $object->getRegistrationNumber();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['companyName'] = $object->getCompanyName();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem' => false];
        }
    }
}