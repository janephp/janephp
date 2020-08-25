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
class EstimateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Estimate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Estimate';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\Estimate();
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('client', $data)) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateClient', 'json', $context));
        }
        if (\array_key_exists('line_items', $data)) {
            $values = array();
            foreach ($data['line_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateLineItem', 'json', $context);
            }
            $object->setLineItems($values);
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateCreator', 'json', $context));
        }
        if (\array_key_exists('client_key', $data)) {
            $object->setClientKey($data['client_key']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('purchase_order', $data)) {
            $object->setPurchaseOrder($data['purchase_order']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('tax', $data)) {
            $object->setTax($data['tax']);
        }
        if (\array_key_exists('tax_amount', $data)) {
            $object->setTaxAmount($data['tax_amount']);
        }
        if (\array_key_exists('tax2', $data)) {
            $object->setTax2($data['tax2']);
        }
        if (\array_key_exists('tax2_amount', $data)) {
            $object->setTax2Amount($data['tax2_amount']);
        }
        if (\array_key_exists('discount', $data)) {
            $object->setDiscount($data['discount']);
        }
        if (\array_key_exists('discount_amount', $data)) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($data['subject']);
        }
        if (\array_key_exists('notes', $data)) {
            $object->setNotes($data['notes']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('issue_date', $data)) {
            $object->setIssueDate(\DateTime::createFromFormat('Y-m-d', $data['issue_date'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('sent_at', $data)) {
            $object->setSentAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['sent_at']));
        }
        if (\array_key_exists('accepted_at', $data)) {
            $object->setAcceptedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['accepted_at']));
        }
        if (\array_key_exists('declined_at', $data)) {
            $object->setDeclinedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['declined_at']));
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
        if (null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getLineItems()) {
            $values = array();
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['line_items'] = $values;
        }
        if (null !== $object->getCreator()) {
            $data['creator'] = $this->normalizer->normalize($object->getCreator(), 'json', $context);
        }
        if (null !== $object->getClientKey()) {
            $data['client_key'] = $object->getClientKey();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getPurchaseOrder()) {
            $data['purchase_order'] = $object->getPurchaseOrder();
        }
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getTax()) {
            $data['tax'] = $object->getTax();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if (null !== $object->getTax2()) {
            $data['tax2'] = $object->getTax2();
        }
        if (null !== $object->getTax2Amount()) {
            $data['tax2_amount'] = $object->getTax2Amount();
        }
        if (null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        if (null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getIssueDate()) {
            $data['issue_date'] = $object->getIssueDate()->format('Y-m-d');
        }
        if (null !== $object->getSentAt()) {
            $data['sent_at'] = $object->getSentAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getAcceptedAt()) {
            $data['accepted_at'] = $object->getAcceptedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDeclinedAt()) {
            $data['declined_at'] = $object->getDeclinedAt()->format('Y-m-d\\TH:i:sP');
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