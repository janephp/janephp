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
class BusinessProcessNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessProcess::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessProcess::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessProcess();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'BusinessProcessDetails' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\BusinessProcessDetails', $format, $context);
        }
        if (\array_key_exists('supportsCancellation', $data) && \is_int($data['supportsCancellation'])) {
            $data['supportsCancellation'] = (bool) $data['supportsCancellation'];
        }
        if (\array_key_exists('finished', $data) && \is_int($data['finished'])) {
            $data['finished'] = (bool) $data['finished'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('processDefinitionId', $data)) {
            $object->setProcessDefinitionId($data['processDefinitionId']);
        }
        if (\array_key_exists('referenceId', $data) && $data['referenceId'] !== null) {
            $object->setReferenceId($data['referenceId']);
        }
        elseif (\array_key_exists('referenceId', $data) && $data['referenceId'] === null) {
            $object->setReferenceId(null);
        }
        if (\array_key_exists('referenceDocType', $data) && $data['referenceDocType'] !== null) {
            $object->setReferenceDocType($data['referenceDocType']);
        }
        elseif (\array_key_exists('referenceDocType', $data) && $data['referenceDocType'] === null) {
            $object->setReferenceDocType(null);
        }
        if (\array_key_exists('supportsCancellation', $data)) {
            $object->setSupportsCancellation($data['supportsCancellation']);
        }
        if (\array_key_exists('businessProcessScope', $data)) {
            $object->setBusinessProcessScope($data['businessProcessScope']);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $object->setLifeCycle($data['lifeCycle']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startDate']));
        }
        if (\array_key_exists('endDate', $data)) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endDate']));
        }
        if (\array_key_exists('finished', $data)) {
            $object->setFinished($data['finished']);
        }
        if (\array_key_exists('stateHistory', $data) && $data['stateHistory'] !== null) {
            $values = [];
            foreach ($data['stateHistory'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\BusinessProcessState::class, 'json', $context);
            }
            $object->setStateHistory($values);
        }
        elseif (\array_key_exists('stateHistory', $data) && $data['stateHistory'] === null) {
            $object->setStateHistory(null);
        }
        if (\array_key_exists('currentState', $data) && $data['currentState'] !== null) {
            $object->setCurrentState($data['currentState']);
        }
        elseif (\array_key_exists('currentState', $data) && $data['currentState'] === null) {
            $object->setCurrentState(null);
        }
        if (\array_key_exists('lastReportedProgress', $data) && $data['lastReportedProgress'] !== null) {
            $object->setLastReportedProgress(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastReportedProgress']));
        }
        elseif (\array_key_exists('lastReportedProgress', $data) && $data['lastReportedProgress'] === null) {
            $object->setLastReportedProgress(null);
        }
        if (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] !== null) {
            $object->setContinuationBusinessProcessId($data['continuationBusinessProcessId']);
        }
        elseif (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] === null) {
            $object->setContinuationBusinessProcessId(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'BusinessProcessDetails' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['id'] = $data->getId();
        $dataArray['processDefinitionId'] = $data->getProcessDefinitionId();
        if ($data->isInitialized('referenceId')) {
            $dataArray['referenceId'] = $data->getReferenceId();
        }
        if ($data->isInitialized('referenceDocType')) {
            $dataArray['referenceDocType'] = $data->getReferenceDocType();
        }
        $dataArray['supportsCancellation'] = $data->getSupportsCancellation();
        $dataArray['businessProcessScope'] = $data->getBusinessProcessScope();
        $dataArray['lifeCycle'] = $data->getLifeCycle();
        $dataArray['startDate'] = $data->getStartDate()->format('Y-m-d\TH:i:sP');
        $dataArray['endDate'] = $data->getEndDate()->format('Y-m-d\TH:i:sP');
        $dataArray['finished'] = $data->getFinished();
        if ($data->isInitialized('stateHistory')) {
            $values = [];
            foreach ($data->getStateHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcess::class => false];
    }
}