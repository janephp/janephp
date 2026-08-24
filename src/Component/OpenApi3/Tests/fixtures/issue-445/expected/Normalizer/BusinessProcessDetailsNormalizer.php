<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
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
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcessDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcessDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcessDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('supportsCancellation', $data) && \is_int($data['supportsCancellation'])) {
            $data['supportsCancellation'] = (bool) $data['supportsCancellation'];
        }
        if (\array_key_exists('finished', $data) && \is_int($data['finished'])) {
            $data['finished'] = (bool) $data['finished'];
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
            unset($data['referenceId']);
        }
        if (\array_key_exists('referenceDocType', $data) && $data['referenceDocType'] !== null) {
            $object->setReferenceDocType($data['referenceDocType']);
            unset($data['referenceDocType']);
        }
        elseif (\array_key_exists('referenceDocType', $data) && $data['referenceDocType'] === null) {
            $object->setReferenceDocType(null);
            unset($data['referenceDocType']);
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
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['startDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setStartDate($date);
            unset($data['startDate']);
        }
        if (\array_key_exists('endDate', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endDate']);
            if (false === $date_1) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['endDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setEndDate($date_1);
            unset($data['endDate']);
        }
        if (\array_key_exists('finished', $data)) {
            $object->setFinished($data['finished']);
            unset($data['finished']);
        }
        if (\array_key_exists('stateHistory', $data) && $data['stateHistory'] !== null) {
            $values = [];
            foreach ($data['stateHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\BusinessProcessState::class, 'json', $context);
            }
            $object->setStateHistory($values);
            unset($data['stateHistory']);
        }
        elseif (\array_key_exists('stateHistory', $data) && $data['stateHistory'] === null) {
            $object->setStateHistory(null);
            unset($data['stateHistory']);
        }
        if (\array_key_exists('currentState', $data) && $data['currentState'] !== null) {
            $object->setCurrentState($data['currentState']);
            unset($data['currentState']);
        }
        elseif (\array_key_exists('currentState', $data) && $data['currentState'] === null) {
            $object->setCurrentState(null);
            unset($data['currentState']);
        }
        if (\array_key_exists('lastReportedProgress', $data) && $data['lastReportedProgress'] !== null) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastReportedProgress']);
            if (false === $date_2) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['lastReportedProgress'], 'Y-m-d\TH:i:sP');
            }
            $object->setLastReportedProgress($date_2);
            unset($data['lastReportedProgress']);
        }
        elseif (\array_key_exists('lastReportedProgress', $data) && $data['lastReportedProgress'] === null) {
            $object->setLastReportedProgress(null);
            unset($data['lastReportedProgress']);
        }
        if (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] !== null) {
            $object->setContinuationBusinessProcessId($data['continuationBusinessProcessId']);
            unset($data['continuationBusinessProcessId']);
        }
        elseif (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] === null) {
            $object->setContinuationBusinessProcessId(null);
            unset($data['continuationBusinessProcessId']);
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
            unset($data['details']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['processDefinitionId'] = $data->getProcessDefinitionId();
        if ($data->isInitialized('referenceId') && null !== $data->getReferenceId()) {
            $dataArray['referenceId'] = $data->getReferenceId();
        }
        if ($data->isInitialized('referenceDocType') && null !== $data->getReferenceDocType()) {
            $dataArray['referenceDocType'] = $data->getReferenceDocType();
        }
        $dataArray['supportsCancellation'] = $data->getSupportsCancellation();
        $dataArray['businessProcessScope'] = $data->getBusinessProcessScope();
        $dataArray['lifeCycle'] = $data->getLifeCycle();
        $dataArray['startDate'] = $data->getStartDate()->format('Y-m-d\TH:i:sP');
        $dataArray['endDate'] = $data->getEndDate()->format('Y-m-d\TH:i:sP');
        $dataArray['finished'] = $data->getFinished();
        if ($data->isInitialized('stateHistory') && null !== $data->getStateHistory()) {
            $values = [];
            foreach ($data->getStateHistory() as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['stateHistory'] = $values;
        }
        if ($data->isInitialized('currentState') && null !== $data->getCurrentState()) {
            $dataArray['currentState'] = $data->getCurrentState();
        }
        if ($data->isInitialized('lastReportedProgress') && null !== $data->getLastReportedProgress()) {
            $dataArray['lastReportedProgress'] = $data->getLastReportedProgress()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('continuationBusinessProcessId') && null !== $data->getContinuationBusinessProcessId()) {
            $dataArray['continuationBusinessProcessId'] = $data->getContinuationBusinessProcessId();
        }
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('details') && null !== $data->getDetails()) {
            $dataArray['details'] = $data->getDetails();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcessDetails::class => false];
    }
}