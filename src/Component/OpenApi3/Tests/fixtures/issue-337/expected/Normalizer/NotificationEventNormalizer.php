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
    class NotificationEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\NotificationEvent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\NotificationEvent';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\NotificationEvent();
            if (\array_key_exists('eventId', $data) && \is_int($data['eventId'])) {
                $data['eventId'] = (double) $data['eventId'];
            }
            if (\array_key_exists('notificationEventId', $data) && \is_int($data['notificationEventId'])) {
                $data['notificationEventId'] = (double) $data['notificationEventId'];
            }
            if (\array_key_exists('ruleCode', $data) && \is_int($data['ruleCode'])) {
                $data['ruleCode'] = (double) $data['ruleCode'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('company', $data)) {
                $object->setCompany($this->denormalizer->denormalize($data['company'], 'CreditSafe\\API\\Model\\Company', 'json', $context));
                unset($data['company']);
            }
            if (\array_key_exists('eventId', $data)) {
                $object->setEventId($data['eventId']);
                unset($data['eventId']);
            }
            if (\array_key_exists('eventDate', $data)) {
                $object->setEventDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['eventDate']));
                unset($data['eventDate']);
            }
            if (\array_key_exists('newValue', $data)) {
                $object->setNewValue($data['newValue']);
                unset($data['newValue']);
            }
            if (\array_key_exists('oldValue', $data)) {
                $object->setOldValue($data['oldValue']);
                unset($data['oldValue']);
            }
            if (\array_key_exists('notificationEventId', $data)) {
                $object->setNotificationEventId($data['notificationEventId']);
                unset($data['notificationEventId']);
            }
            if (\array_key_exists('ruleCode', $data)) {
                $object->setRuleCode($data['ruleCode']);
                unset($data['ruleCode']);
            }
            if (\array_key_exists('ruleName', $data)) {
                $object->setRuleName($data['ruleName']);
                unset($data['ruleName']);
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
            if ($object->isInitialized('company') && null !== $object->getCompany()) {
                $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
            }
            if ($object->isInitialized('eventId') && null !== $object->getEventId()) {
                $data['eventId'] = $object->getEventId();
            }
            if ($object->isInitialized('eventDate') && null !== $object->getEventDate()) {
                $data['eventDate'] = $object->getEventDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('newValue') && null !== $object->getNewValue()) {
                $data['newValue'] = $object->getNewValue();
            }
            if ($object->isInitialized('oldValue') && null !== $object->getOldValue()) {
                $data['oldValue'] = $object->getOldValue();
            }
            if ($object->isInitialized('notificationEventId') && null !== $object->getNotificationEventId()) {
                $data['notificationEventId'] = $object->getNotificationEventId();
            }
            if ($object->isInitialized('ruleCode') && null !== $object->getRuleCode()) {
                $data['ruleCode'] = $object->getRuleCode();
            }
            if ($object->isInitialized('ruleName') && null !== $object->getRuleName()) {
                $data['ruleName'] = $object->getRuleName();
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
            return ['CreditSafe\\API\\Model\\NotificationEvent' => false];
        }
    }
} else {
    class NotificationEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\NotificationEvent';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\NotificationEvent';
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
            $object = new \CreditSafe\API\Model\NotificationEvent();
            if (\array_key_exists('eventId', $data) && \is_int($data['eventId'])) {
                $data['eventId'] = (double) $data['eventId'];
            }
            if (\array_key_exists('notificationEventId', $data) && \is_int($data['notificationEventId'])) {
                $data['notificationEventId'] = (double) $data['notificationEventId'];
            }
            if (\array_key_exists('ruleCode', $data) && \is_int($data['ruleCode'])) {
                $data['ruleCode'] = (double) $data['ruleCode'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('company', $data)) {
                $object->setCompany($this->denormalizer->denormalize($data['company'], 'CreditSafe\\API\\Model\\Company', 'json', $context));
                unset($data['company']);
            }
            if (\array_key_exists('eventId', $data)) {
                $object->setEventId($data['eventId']);
                unset($data['eventId']);
            }
            if (\array_key_exists('eventDate', $data)) {
                $object->setEventDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['eventDate']));
                unset($data['eventDate']);
            }
            if (\array_key_exists('newValue', $data)) {
                $object->setNewValue($data['newValue']);
                unset($data['newValue']);
            }
            if (\array_key_exists('oldValue', $data)) {
                $object->setOldValue($data['oldValue']);
                unset($data['oldValue']);
            }
            if (\array_key_exists('notificationEventId', $data)) {
                $object->setNotificationEventId($data['notificationEventId']);
                unset($data['notificationEventId']);
            }
            if (\array_key_exists('ruleCode', $data)) {
                $object->setRuleCode($data['ruleCode']);
                unset($data['ruleCode']);
            }
            if (\array_key_exists('ruleName', $data)) {
                $object->setRuleName($data['ruleName']);
                unset($data['ruleName']);
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
            if ($object->isInitialized('company') && null !== $object->getCompany()) {
                $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
            }
            if ($object->isInitialized('eventId') && null !== $object->getEventId()) {
                $data['eventId'] = $object->getEventId();
            }
            if ($object->isInitialized('eventDate') && null !== $object->getEventDate()) {
                $data['eventDate'] = $object->getEventDate()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('newValue') && null !== $object->getNewValue()) {
                $data['newValue'] = $object->getNewValue();
            }
            if ($object->isInitialized('oldValue') && null !== $object->getOldValue()) {
                $data['oldValue'] = $object->getOldValue();
            }
            if ($object->isInitialized('notificationEventId') && null !== $object->getNotificationEventId()) {
                $data['notificationEventId'] = $object->getNotificationEventId();
            }
            if ($object->isInitialized('ruleCode') && null !== $object->getRuleCode()) {
                $data['ruleCode'] = $object->getRuleCode();
            }
            if ($object->isInitialized('ruleName') && null !== $object->getRuleName()) {
                $data['ruleName'] = $object->getRuleName();
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
            return ['CreditSafe\\API\\Model\\NotificationEvent' => false];
        }
    }
}