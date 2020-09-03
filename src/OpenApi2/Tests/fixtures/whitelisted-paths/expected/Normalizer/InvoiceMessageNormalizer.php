<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InvoiceMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceMessage';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceMessage';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\InvoiceMessage();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('sent_by', $data)) {
            $object->setSentBy($data['sent_by']);
        }
        if (\array_key_exists('sent_by_email', $data)) {
            $object->setSentByEmail($data['sent_by_email']);
        }
        if (\array_key_exists('sent_from', $data)) {
            $object->setSentFrom($data['sent_from']);
        }
        if (\array_key_exists('sent_from_email', $data)) {
            $object->setSentFromEmail($data['sent_from_email']);
        }
        if (\array_key_exists('recipients', $data)) {
            $values = array();
            foreach ($data['recipients'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceMessageRecipient', 'json', $context);
            }
            $object->setRecipients($values);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
        }
        if (\array_key_exists('include_link_to_client_invoice', $data)) {
            $object->setIncludeLinkToClientInvoice($data['include_link_to_client_invoice']);
        }
        if (\array_key_exists('attach_pdf', $data)) {
            $object->setAttachPdf($data['attach_pdf']);
        }
        if (\array_key_exists('send_me_a_copy', $data)) {
            $object->setSendMeACopy($data['send_me_a_copy']);
        }
        if (\array_key_exists('thank_you', $data)) {
            $object->setThankYou($data['thank_you']);
        }
        if (\array_key_exists('event_type', $data)) {
            $object->setEventType($data['event_type']);
        }
        if (\array_key_exists('reminder', $data)) {
            $object->setReminder($data['reminder']);
        }
        if (\array_key_exists('send_reminder_on', $data)) {
            $object->setSendReminderOn(\DateTime::createFromFormat('Y-m-d', $data['send_reminder_on'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getSentBy()) {
            $data['sent_by'] = $object->getSentBy();
        }
        if (null !== $object->getSentByEmail()) {
            $data['sent_by_email'] = $object->getSentByEmail();
        }
        if (null !== $object->getSentFrom()) {
            $data['sent_from'] = $object->getSentFrom();
        }
        if (null !== $object->getSentFromEmail()) {
            $data['sent_from_email'] = $object->getSentFromEmail();
        }
        if (null !== $object->getRecipients()) {
            $values = array();
            foreach ($object->getRecipients() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['recipients'] = $values;
        }
        if (null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if (null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        if (null !== $object->getIncludeLinkToClientInvoice()) {
            $data['include_link_to_client_invoice'] = $object->getIncludeLinkToClientInvoice();
        }
        if (null !== $object->getAttachPdf()) {
            $data['attach_pdf'] = $object->getAttachPdf();
        }
        if (null !== $object->getSendMeACopy()) {
            $data['send_me_a_copy'] = $object->getSendMeACopy();
        }
        if (null !== $object->getThankYou()) {
            $data['thank_you'] = $object->getThankYou();
        }
        if (null !== $object->getEventType()) {
            $data['event_type'] = $object->getEventType();
        }
        if (null !== $object->getReminder()) {
            $data['reminder'] = $object->getReminder();
        }
        if (null !== $object->getSendReminderOn()) {
            $data['send_reminder_on'] = $object->getSendReminderOn()->format('Y-m-d');
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}