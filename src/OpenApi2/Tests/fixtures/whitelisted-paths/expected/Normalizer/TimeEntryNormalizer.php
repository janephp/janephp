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
class TimeEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntry';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntry';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\TimeEntry();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('spent_date', $data)) {
            $object->setSpentDate(\DateTime::createFromFormat('Y-m-d', $data['spent_date'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryUser', 'json', $context));
        }
        if (\array_key_exists('user_assignment', $data)) {
            $object->setUserAssignment($this->denormalizer->denormalize($data['user_assignment'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UserAssignment', 'json', $context));
        }
        if (\array_key_exists('client', $data)) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryClient', 'json', $context));
        }
        if (\array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryProject', 'json', $context));
        }
        if (\array_key_exists('task', $data)) {
            $object->setTask($this->denormalizer->denormalize($data['task'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryTask', 'json', $context));
        }
        if (\array_key_exists('task_assignment', $data)) {
            $object->setTaskAssignment($this->denormalizer->denormalize($data['task_assignment'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TaskAssignment', 'json', $context));
        }
        if (\array_key_exists('external_reference', $data)) {
            $object->setExternalReference($this->denormalizer->denormalize($data['external_reference'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryExternalReference', 'json', $context));
        }
        if (\array_key_exists('invoice', $data)) {
            $object->setInvoice($this->denormalizer->denormalize($data['invoice'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryInvoice', 'json', $context));
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('rounded_hours', $data)) {
            $object->setRoundedHours($data['rounded_hours']);
        }
        if (\array_key_exists('notes', $data)) {
            $object->setNotes($data['notes']);
        }
        if (\array_key_exists('is_locked', $data)) {
            $object->setIsLocked($data['is_locked']);
        }
        if (\array_key_exists('locked_reason', $data)) {
            $object->setLockedReason($data['locked_reason']);
        }
        if (\array_key_exists('is_closed', $data)) {
            $object->setIsClosed($data['is_closed']);
        }
        if (\array_key_exists('is_billed', $data)) {
            $object->setIsBilled($data['is_billed']);
        }
        if (\array_key_exists('timer_started_at', $data)) {
            $object->setTimerStartedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timer_started_at']));
        }
        if (\array_key_exists('started_time', $data)) {
            $object->setStartedTime($data['started_time']);
        }
        if (\array_key_exists('ended_time', $data)) {
            $object->setEndedTime($data['ended_time']);
        }
        if (\array_key_exists('is_running', $data)) {
            $object->setIsRunning($data['is_running']);
        }
        if (\array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }
        if (\array_key_exists('budgeted', $data)) {
            $object->setBudgeted($data['budgeted']);
        }
        if (\array_key_exists('billable_rate', $data)) {
            $object->setBillableRate($data['billable_rate']);
        }
        if (\array_key_exists('cost_rate', $data)) {
            $object->setCostRate($data['cost_rate']);
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
        if (null !== $object->getSpentDate()) {
            $data['spent_date'] = $object->getSpentDate()->format('Y-m-d');
        }
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getUserAssignment()) {
            $data['user_assignment'] = $this->normalizer->normalize($object->getUserAssignment(), 'json', $context);
        }
        if (null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if (null !== $object->getTask()) {
            $data['task'] = $this->normalizer->normalize($object->getTask(), 'json', $context);
        }
        if (null !== $object->getTaskAssignment()) {
            $data['task_assignment'] = $this->normalizer->normalize($object->getTaskAssignment(), 'json', $context);
        }
        if (null !== $object->getExternalReference()) {
            $data['external_reference'] = $this->normalizer->normalize($object->getExternalReference(), 'json', $context);
        }
        if (null !== $object->getInvoice()) {
            $data['invoice'] = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if (null !== $object->getRoundedHours()) {
            $data['rounded_hours'] = $object->getRoundedHours();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getIsLocked()) {
            $data['is_locked'] = $object->getIsLocked();
        }
        if (null !== $object->getLockedReason()) {
            $data['locked_reason'] = $object->getLockedReason();
        }
        if (null !== $object->getIsClosed()) {
            $data['is_closed'] = $object->getIsClosed();
        }
        if (null !== $object->getIsBilled()) {
            $data['is_billed'] = $object->getIsBilled();
        }
        if (null !== $object->getTimerStartedAt()) {
            $data['timer_started_at'] = $object->getTimerStartedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getStartedTime()) {
            $data['started_time'] = $object->getStartedTime();
        }
        if (null !== $object->getEndedTime()) {
            $data['ended_time'] = $object->getEndedTime();
        }
        if (null !== $object->getIsRunning()) {
            $data['is_running'] = $object->getIsRunning();
        }
        if (null !== $object->getBillable()) {
            $data['billable'] = $object->getBillable();
        }
        if (null !== $object->getBudgeted()) {
            $data['budgeted'] = $object->getBudgeted();
        }
        if (null !== $object->getBillableRate()) {
            $data['billable_rate'] = $object->getBillableRate();
        }
        if (null !== $object->getCostRate()) {
            $data['cost_rate'] = $object->getCostRate();
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