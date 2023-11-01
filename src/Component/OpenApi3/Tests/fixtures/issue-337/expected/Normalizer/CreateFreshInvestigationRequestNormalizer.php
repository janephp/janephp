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
    class CreateFreshInvestigationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\CreateFreshInvestigationRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\CreateFreshInvestigationRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\CreateFreshInvestigationRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('consent', $data)) {
                $object->setConsent($data['consent']);
                unset($data['consent']);
            }
            if (\array_key_exists('contactInfo', $data)) {
                $object->setContactInfo($this->denormalizer->denormalize($data['contactInfo'], 'CreditSafe\\API\\Model\\CreateFreshInvestigationRequestContactInfo', 'json', $context));
                unset($data['contactInfo']);
            }
            if (\array_key_exists('chargeReference', $data)) {
                $object->setChargeReference($data['chargeReference']);
                unset($data['chargeReference']);
            }
            if (\array_key_exists('searchCriteria', $data)) {
                $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], 'CreditSafe\\API\\Model\\CreateFreshInvestigationRequestSearchCriteria', 'json', $context));
                unset($data['searchCriteria']);
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
            if ($object->isInitialized('consent') && null !== $object->getConsent()) {
                $data['consent'] = $object->getConsent();
            }
            if ($object->isInitialized('contactInfo') && null !== $object->getContactInfo()) {
                $data['contactInfo'] = $this->normalizer->normalize($object->getContactInfo(), 'json', $context);
            }
            if ($object->isInitialized('chargeReference') && null !== $object->getChargeReference()) {
                $data['chargeReference'] = $object->getChargeReference();
            }
            if ($object->isInitialized('searchCriteria') && null !== $object->getSearchCriteria()) {
                $data['searchCriteria'] = $this->normalizer->normalize($object->getSearchCriteria(), 'json', $context);
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
            return ['CreditSafe\\API\\Model\\CreateFreshInvestigationRequest' => false];
        }
    }
} else {
    class CreateFreshInvestigationRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\CreateFreshInvestigationRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\CreateFreshInvestigationRequest';
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
            $object = new \CreditSafe\API\Model\CreateFreshInvestigationRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('consent', $data)) {
                $object->setConsent($data['consent']);
                unset($data['consent']);
            }
            if (\array_key_exists('contactInfo', $data)) {
                $object->setContactInfo($this->denormalizer->denormalize($data['contactInfo'], 'CreditSafe\\API\\Model\\CreateFreshInvestigationRequestContactInfo', 'json', $context));
                unset($data['contactInfo']);
            }
            if (\array_key_exists('chargeReference', $data)) {
                $object->setChargeReference($data['chargeReference']);
                unset($data['chargeReference']);
            }
            if (\array_key_exists('searchCriteria', $data)) {
                $object->setSearchCriteria($this->denormalizer->denormalize($data['searchCriteria'], 'CreditSafe\\API\\Model\\CreateFreshInvestigationRequestSearchCriteria', 'json', $context));
                unset($data['searchCriteria']);
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
            if ($object->isInitialized('consent') && null !== $object->getConsent()) {
                $data['consent'] = $object->getConsent();
            }
            if ($object->isInitialized('contactInfo') && null !== $object->getContactInfo()) {
                $data['contactInfo'] = $this->normalizer->normalize($object->getContactInfo(), 'json', $context);
            }
            if ($object->isInitialized('chargeReference') && null !== $object->getChargeReference()) {
                $data['chargeReference'] = $object->getChargeReference();
            }
            if ($object->isInitialized('searchCriteria') && null !== $object->getSearchCriteria()) {
                $data['searchCriteria'] = $this->normalizer->normalize($object->getSearchCriteria(), 'json', $context);
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
            return ['CreditSafe\\API\\Model\\CreateFreshInvestigationRequest' => false];
        }
    }
}