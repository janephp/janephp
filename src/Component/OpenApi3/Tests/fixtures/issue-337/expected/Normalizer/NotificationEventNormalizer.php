<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NotificationEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\NotificationEvent';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\NotificationEvent';
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
        $object = new \CreditSafe\API\Model\NotificationEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], 'CreditSafe\\API\\Model\\Company', 'json', $context));
        }
        if (\array_key_exists('eventId', $data)) {
            $object->setEventId($data['eventId']);
        }
        if (\array_key_exists('eventDate', $data)) {
            $object->setEventDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['eventDate']));
        }
        if (\array_key_exists('newValue', $data)) {
            $object->setNewValue($data['newValue']);
        }
        if (\array_key_exists('oldValue', $data)) {
            $object->setOldValue($data['oldValue']);
        }
        if (\array_key_exists('notificationEventId', $data)) {
            $object->setNotificationEventId($data['notificationEventId']);
        }
        if (\array_key_exists('ruleCode', $data)) {
            $object->setRuleCode($data['ruleCode']);
        }
        if (\array_key_exists('ruleName', $data)) {
            $object->setRuleName($data['ruleName']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCompany()) {
            $data['company'] = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }
        if (null !== $object->getEventId()) {
            $data['eventId'] = $object->getEventId();
        }
        if (null !== $object->getEventDate()) {
            $data['eventDate'] = $object->getEventDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getNewValue()) {
            $data['newValue'] = $object->getNewValue();
        }
        if (null !== $object->getOldValue()) {
            $data['oldValue'] = $object->getOldValue();
        }
        if (null !== $object->getNotificationEventId()) {
            $data['notificationEventId'] = $object->getNotificationEventId();
        }
        if (null !== $object->getRuleCode()) {
            $data['ruleCode'] = $object->getRuleCode();
        }
        if (null !== $object->getRuleName()) {
            $data['ruleName'] = $object->getRuleName();
        }
        return $data;
    }
}