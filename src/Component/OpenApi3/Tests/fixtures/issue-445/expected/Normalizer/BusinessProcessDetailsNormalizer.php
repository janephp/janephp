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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessProcessDetails();
        if (\array_key_exists('supportsCancellation', $data) && \is_int($data['supportsCancellation'])) {
            $data['supportsCancellation'] = (bool) $data['supportsCancellation'];
        }
        if (\array_key_exists('finished', $data) && \is_int($data['finished'])) {
            $data['finished'] = (bool) $data['finished'];
        }
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
            $value = $data['businessProcessScope'];
            if (is_string($data['businessProcessScope'])) {
                $value = $data['businessProcessScope'];
            }
            $object->setBusinessProcessScope($value);
            unset($data['businessProcessScope']);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_1 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_1 = $data['lifeCycle'];
            }
            $object->setLifeCycle($value_1);
            unset($data['lifeCycle']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startDate']));
            unset($data['startDate']);
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endDate']));
            unset($data['endDate']);
        }
        if (\array_key_exists('finished', $data)) {
            $object->setFinished($data['finished']);
            unset($data['finished']);
        }
        if (\array_key_exists('stateHistory', $data) && $data['stateHistory'] !== null) {
            $values = [];
            foreach ($data['stateHistory'] as $value_2) {
                $values[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\BusinessProcessState::class, 'json', $context);
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
            $object->setLastReportedProgress(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastReportedProgress']));
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
            $value_3 = $data['details'];
            if (is_array($data['details']) and isset($data['details']['kind'])) {
                $value_3 = $this->denormalizer->denormalize($data['details'], \PicturePark\API\Model\BusinessProcessDetailsDataBase::class, 'json', $context);
            }
            $object->setDetails($value_3);
            unset($data['details']);
        }
        elseif (\array_key_exists('details', $data) && $data['details'] === null) {
            $object->setDetails(null);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['processDefinitionId'] = $data->getProcessDefinitionId();
        if ($data->isInitialized('referenceId')) {
            $dataArray['referenceId'] = $data->getReferenceId();
        }
        if ($data->isInitialized('referenceDocType')) {
            $dataArray['referenceDocType'] = $data->getReferenceDocType();
        }
        $dataArray['supportsCancellation'] = $data->getSupportsCancellation();
        $value = $data->getBusinessProcessScope();
        if (is_string($data->getBusinessProcessScope())) {
            $value = $data->getBusinessProcessScope();
        }
        $dataArray['businessProcessScope'] = $value;
        $value_1 = $data->getLifeCycle();
        if (is_string($data->getLifeCycle())) {
            $value_1 = $data->getLifeCycle();
        }
        $dataArray['lifeCycle'] = $value_1;
        $dataArray['startDate'] = $data->getStartDate()->format('Y-m-d\TH:i:sP');
        $dataArray['endDate'] = $data->getEndDate()->format('Y-m-d\TH:i:sP');
        $dataArray['finished'] = $data->getFinished();
        if ($data->isInitialized('stateHistory')) {
            $values = [];
            foreach ($data->getStateHistory() as $value_2) {
                $values[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['stateHistory'] = $values;
        }
        if ($data->isInitialized('currentState')) {
            $dataArray['currentState'] = $data->getCurrentState();
        }
        if ($data->isInitialized('lastReportedProgress')) {
            $dataArray['lastReportedProgress'] = $data->getLastReportedProgress()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('continuationBusinessProcessId')) {
            $dataArray['continuationBusinessProcessId'] = $data->getContinuationBusinessProcessId();
        }
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('details')) {
            $value_3 = $data->getDetails();
            if (is_object($data->getDetails())) {
                $value_3 = $this->normalizer->normalize($data->getDetails(), 'json', $context);
            }
            $dataArray['details'] = $value_3;
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcessDetails::class => false];
    }
}