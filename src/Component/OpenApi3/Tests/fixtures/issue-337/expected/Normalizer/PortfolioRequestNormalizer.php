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
    class PortfolioRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\PortfolioRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\PortfolioRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\PortfolioRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('isDefault', $data)) {
                $object->setIsDefault($data['isDefault']);
                unset($data['isDefault']);
            }
            if (\array_key_exists('emails', $data)) {
                $object->setEmails($this->denormalizer->denormalize($data['emails'], 'CreditSafe\\API\\Model\\PortfolioRequestEmails', 'json', $context));
                unset($data['emails']);
            }
            if (\array_key_exists('emailSubject', $data)) {
                $object->setEmailSubject($data['emailSubject']);
                unset($data['emailSubject']);
            }
            if (\array_key_exists('emailLanguage', $data)) {
                $object->setEmailLanguage($data['emailLanguage']);
                unset($data['emailLanguage']);
            }
            if (\array_key_exists('frequency', $data)) {
                $object->setFrequency($data['frequency']);
                unset($data['frequency']);
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
            $data['name'] = $object->getName();
            $data['isDefault'] = $object->getIsDefault();
            if ($object->isInitialized('emails') && null !== $object->getEmails()) {
                $data['emails'] = $this->normalizer->normalize($object->getEmails(), 'json', $context);
            }
            if ($object->isInitialized('emailSubject') && null !== $object->getEmailSubject()) {
                $data['emailSubject'] = $object->getEmailSubject();
            }
            if ($object->isInitialized('emailLanguage') && null !== $object->getEmailLanguage()) {
                $data['emailLanguage'] = $object->getEmailLanguage();
            }
            if ($object->isInitialized('frequency') && null !== $object->getFrequency()) {
                $data['frequency'] = $object->getFrequency();
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
            return ['CreditSafe\\API\\Model\\PortfolioRequest' => false];
        }
    }
} else {
    class PortfolioRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\PortfolioRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\PortfolioRequest';
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
            $object = new \CreditSafe\API\Model\PortfolioRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('isDefault', $data)) {
                $object->setIsDefault($data['isDefault']);
                unset($data['isDefault']);
            }
            if (\array_key_exists('emails', $data)) {
                $object->setEmails($this->denormalizer->denormalize($data['emails'], 'CreditSafe\\API\\Model\\PortfolioRequestEmails', 'json', $context));
                unset($data['emails']);
            }
            if (\array_key_exists('emailSubject', $data)) {
                $object->setEmailSubject($data['emailSubject']);
                unset($data['emailSubject']);
            }
            if (\array_key_exists('emailLanguage', $data)) {
                $object->setEmailLanguage($data['emailLanguage']);
                unset($data['emailLanguage']);
            }
            if (\array_key_exists('frequency', $data)) {
                $object->setFrequency($data['frequency']);
                unset($data['frequency']);
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
            $data['name'] = $object->getName();
            $data['isDefault'] = $object->getIsDefault();
            if ($object->isInitialized('emails') && null !== $object->getEmails()) {
                $data['emails'] = $this->normalizer->normalize($object->getEmails(), 'json', $context);
            }
            if ($object->isInitialized('emailSubject') && null !== $object->getEmailSubject()) {
                $data['emailSubject'] = $object->getEmailSubject();
            }
            if ($object->isInitialized('emailLanguage') && null !== $object->getEmailLanguage()) {
                $data['emailLanguage'] = $object->getEmailLanguage();
            }
            if ($object->isInitialized('frequency') && null !== $object->getFrequency()) {
                $data['frequency'] = $object->getFrequency();
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
            return ['CreditSafe\\API\\Model\\PortfolioRequest' => false];
        }
    }
}