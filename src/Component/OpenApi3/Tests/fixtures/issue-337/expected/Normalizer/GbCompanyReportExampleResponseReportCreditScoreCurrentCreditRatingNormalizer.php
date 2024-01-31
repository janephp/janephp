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
    class GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('commonValue', $data)) {
                $object->setCommonValue($data['commonValue']);
                unset($data['commonValue']);
            }
            if (\array_key_exists('commonDescription', $data)) {
                $object->setCommonDescription($data['commonDescription']);
                unset($data['commonDescription']);
            }
            if (\array_key_exists('creditLimit', $data)) {
                $object->setCreditLimit($this->denormalizer->denormalize($data['creditLimit'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit', 'json', $context));
                unset($data['creditLimit']);
            }
            if (\array_key_exists('providerValue', $data)) {
                $object->setProviderValue($this->denormalizer->denormalize($data['providerValue'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue', 'json', $context));
                unset($data['providerValue']);
            }
            if (\array_key_exists('providerDescription', $data)) {
                $object->setProviderDescription($data['providerDescription']);
                unset($data['providerDescription']);
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
            if ($object->isInitialized('commonValue') && null !== $object->getCommonValue()) {
                $data['commonValue'] = $object->getCommonValue();
            }
            if ($object->isInitialized('commonDescription') && null !== $object->getCommonDescription()) {
                $data['commonDescription'] = $object->getCommonDescription();
            }
            if ($object->isInitialized('creditLimit') && null !== $object->getCreditLimit()) {
                $data['creditLimit'] = $this->normalizer->normalize($object->getCreditLimit(), 'json', $context);
            }
            if ($object->isInitialized('providerValue') && null !== $object->getProviderValue()) {
                $data['providerValue'] = $this->normalizer->normalize($object->getProviderValue(), 'json', $context);
            }
            if ($object->isInitialized('providerDescription') && null !== $object->getProviderDescription()) {
                $data['providerDescription'] = $object->getProviderDescription();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating' => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating';
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('commonValue', $data)) {
                $object->setCommonValue($data['commonValue']);
                unset($data['commonValue']);
            }
            if (\array_key_exists('commonDescription', $data)) {
                $object->setCommonDescription($data['commonDescription']);
                unset($data['commonDescription']);
            }
            if (\array_key_exists('creditLimit', $data)) {
                $object->setCreditLimit($this->denormalizer->denormalize($data['creditLimit'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingCreditLimit', 'json', $context));
                unset($data['creditLimit']);
            }
            if (\array_key_exists('providerValue', $data)) {
                $object->setProviderValue($this->denormalizer->denormalize($data['providerValue'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRatingProviderValue', 'json', $context));
                unset($data['providerValue']);
            }
            if (\array_key_exists('providerDescription', $data)) {
                $object->setProviderDescription($data['providerDescription']);
                unset($data['providerDescription']);
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
            if ($object->isInitialized('commonValue') && null !== $object->getCommonValue()) {
                $data['commonValue'] = $object->getCommonValue();
            }
            if ($object->isInitialized('commonDescription') && null !== $object->getCommonDescription()) {
                $data['commonDescription'] = $object->getCommonDescription();
            }
            if ($object->isInitialized('creditLimit') && null !== $object->getCreditLimit()) {
                $data['creditLimit'] = $this->normalizer->normalize($object->getCreditLimit(), 'json', $context);
            }
            if ($object->isInitialized('providerValue') && null !== $object->getProviderValue()) {
                $data['providerValue'] = $this->normalizer->normalize($object->getProviderValue(), 'json', $context);
            }
            if ($object->isInitialized('providerDescription') && null !== $object->getProviderDescription()) {
                $data['providerDescription'] = $object->getProviderDescription();
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
            return ['CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScoreCurrentCreditRating' => false];
        }
    }
}