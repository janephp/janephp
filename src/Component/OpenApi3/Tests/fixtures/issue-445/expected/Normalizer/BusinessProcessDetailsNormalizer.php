<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessProcessDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\BusinessProcessDetails';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessProcessDetails';
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
        $object = new \PicturePark\API\Model\BusinessProcessDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('processDefinitionId', $data)) {
            $object->setProcessDefinitionId($data['processDefinitionId']);
            unset($data['processDefinitionId']);
        }
        if (\array_key_exists('referenceId', $data) && $data['referenceId'] !== null) {
            $object->setReferenceId($data['referenceId']);
            unset($data['referenceId']);
        }
        elseif (\array_key_exists('referenceId', $data) && $data['referenceId'] === null) {
            $object->setReferenceId(null);
        }
        if (\array_key_exists('referenceDocType', $data) && $data['referenceDocType'] !== null) {
            $object->setReferenceDocType($data['referenceDocType']);
            unset($data['referenceDocType']);
        }
        elseif (\array_key_exists('referenceDocType', $data) && $data['referenceDocType'] === null) {
            $object->setReferenceDocType(null);
        }
        if (\array_key_exists('supportsCancellation', $data)) {
            $object->setSupportsCancellation($data['supportsCancellation']);
            unset($data['supportsCancellation']);
        }
        if (\array_key_exists('businessProcessScope', $data)) {
            $object->setBusinessProcessScope($data['businessProcessScope']);
            unset($data['businessProcessScope']);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $object->setLifeCycle($data['lifeCycle']);
            unset($data['lifeCycle']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['startDate']));
            unset($data['startDate']);
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['endDate']));
            unset($data['endDate']);
        }
        if (\array_key_exists('finished', $data)) {
            $object->setFinished($data['finished']);
            unset($data['finished']);
        }
        if (\array_key_exists('stateHistory', $data) && $data['stateHistory'] !== null) {
            $values = array();
            foreach ($data['stateHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessProcessState', 'json', $context);
            }
            $object->setStateHistory($values);
            unset($data['stateHistory']);
        }
        elseif (\array_key_exists('stateHistory', $data) && $data['stateHistory'] === null) {
            $object->setStateHistory(null);
        }
        if (\array_key_exists('currentState', $data) && $data['currentState'] !== null) {
            $object->setCurrentState($data['currentState']);
            unset($data['currentState']);
        }
        elseif (\array_key_exists('currentState', $data) && $data['currentState'] === null) {
            $object->setCurrentState(null);
        }
        if (\array_key_exists('lastReportedProgress', $data) && $data['lastReportedProgress'] !== null) {
            $object->setLastReportedProgress(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastReportedProgress']));
            unset($data['lastReportedProgress']);
        }
        elseif (\array_key_exists('lastReportedProgress', $data) && $data['lastReportedProgress'] === null) {
            $object->setLastReportedProgress(null);
        }
        if (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] !== null) {
            $object->setContinuationBusinessProcessId($data['continuationBusinessProcessId']);
            unset($data['continuationBusinessProcessId']);
        }
        elseif (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] === null) {
            $object->setContinuationBusinessProcessId(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('details', $data) && $data['details'] !== null) {
            $object->setDetails($data['details']);
            unset($data['details']);
        }
        elseif (\array_key_exists('details', $data) && $data['details'] === null) {
            $object->setDetails(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['processDefinitionId'] = $object->getProcessDefinitionId();
        if ($object->isInitialized('referenceId') && null !== $object->getReferenceId()) {
            $data['referenceId'] = $object->getReferenceId();
        }
        if ($object->isInitialized('referenceDocType') && null !== $object->getReferenceDocType()) {
            $data['referenceDocType'] = $object->getReferenceDocType();
        }
        $data['supportsCancellation'] = $object->getSupportsCancellation();
        $data['businessProcessScope'] = $object->getBusinessProcessScope();
        $data['lifeCycle'] = $object->getLifeCycle();
        $data['startDate'] = $object->getStartDate()->format('Y-m-d\\TH:i:sP');
        $data['endDate'] = $object->getEndDate()->format('Y-m-d\\TH:i:sP');
        $data['finished'] = $object->getFinished();
        if ($object->isInitialized('stateHistory') && null !== $object->getStateHistory()) {
            $values = array();
            foreach ($object->getStateHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['stateHistory'] = $values;
        }
        if ($object->isInitialized('currentState') && null !== $object->getCurrentState()) {
            $data['currentState'] = $object->getCurrentState();
        }
        if ($object->isInitialized('lastReportedProgress') && null !== $object->getLastReportedProgress()) {
            $data['lastReportedProgress'] = $object->getLastReportedProgress()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('continuationBusinessProcessId') && null !== $object->getContinuationBusinessProcessId()) {
            $data['continuationBusinessProcessId'] = $object->getContinuationBusinessProcessId();
        }
        $data['kind'] = $object->getKind();
        if ($object->isInitialized('details') && null !== $object->getDetails()) {
            $data['details'] = $object->getDetails();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\BusinessProcessDetails' => false);
    }
}