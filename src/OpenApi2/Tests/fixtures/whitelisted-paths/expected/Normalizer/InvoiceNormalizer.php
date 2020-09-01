<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Invoice';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Invoice';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\Invoice();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('client', $data)) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceClient', 'json', $context));
        }
        if (\array_key_exists('line_items', $data)) {
            $values = array();
            foreach ($data['line_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceLineItem', 'json', $context);
            }
            $object->setLineItems($values);
        }
        if (\array_key_exists('estimate', $data)) {
            $object->setEstimate($this->denormalizer->denormalize($data['estimate'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceEstimate', 'json', $context));
        }
        if (\array_key_exists('retainer', $data)) {
            $object->setRetainer($this->denormalizer->denormalize($data['retainer'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceRetainer', 'json', $context));
        }
        if (\array_key_exists('creator', $data)) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceCreator', 'json', $context));
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
        if (\array_key_exists('due_amount', $data)) {
            $object->setDueAmount($data['due_amount']);
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
        if (\array_key_exists('period_start', $data)) {
            $object->setPeriodStart(\DateTime::createFromFormat('Y-m-d', $data['period_start'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('period_end', $data)) {
            $object->setPeriodEnd(\DateTime::createFromFormat('Y-m-d', $data['period_end'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('issue_date', $data)) {
            $object->setIssueDate(\DateTime::createFromFormat('Y-m-d', $data['issue_date'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('due_date', $data)) {
            $object->setDueDate(\DateTime::createFromFormat('Y-m-d', $data['due_date'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('payment_term', $data)) {
            $object->setPaymentTerm($data['payment_term']);
        }
        if (\array_key_exists('sent_at', $data)) {
            $object->setSentAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['sent_at']));
        }
        if (\array_key_exists('paid_at', $data)) {
            $object->setPaidAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['paid_at']));
        }
        if (\array_key_exists('paid_date', $data)) {
            $object->setPaidDate(\DateTime::createFromFormat('Y-m-d', $data['paid_date'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('closed_at', $data)) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
        }
        if (\array_key_exists('recurring_invoice_id', $data)) {
            $object->setRecurringInvoiceId($data['recurring_invoice_id']);
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
        if (null !== $object->getEstimate()) {
            $data['estimate'] = $this->normalizer->normalize($object->getEstimate(), 'json', $context);
        }
        if (null !== $object->getRetainer()) {
            $data['retainer'] = $this->normalizer->normalize($object->getRetainer(), 'json', $context);
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
        if (null !== $object->getDueAmount()) {
            $data['due_amount'] = $object->getDueAmount();
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
        if (null !== $object->getPeriodStart()) {
            $data['period_start'] = $object->getPeriodStart()->format('Y-m-d');
        }
        if (null !== $object->getPeriodEnd()) {
            $data['period_end'] = $object->getPeriodEnd()->format('Y-m-d');
        }
        if (null !== $object->getIssueDate()) {
            $data['issue_date'] = $object->getIssueDate()->format('Y-m-d');
        }
        if (null !== $object->getDueDate()) {
            $data['due_date'] = $object->getDueDate()->format('Y-m-d');
        }
        if (null !== $object->getPaymentTerm()) {
            $data['payment_term'] = $object->getPaymentTerm();
        }
        if (null !== $object->getSentAt()) {
            $data['sent_at'] = $object->getSentAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getPaidAt()) {
            $data['paid_at'] = $object->getPaidAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getPaidDate()) {
            $data['paid_date'] = $object->getPaidDate()->format('Y-m-d');
        }
        if (null !== $object->getClosedAt()) {
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getRecurringInvoiceId()) {
            $data['recurring_invoice_id'] = $object->getRecurringInvoiceId();
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