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
            $object->id = $data['id'];
        }
        if (\array_key_exists('processDefinitionId', $data)) {
            $object->processDefinitionId = $data['processDefinitionId'];
        }
        if (\array_key_exists('referenceId', $data) && $data['referenceId'] !== null) {
            $object->referenceId = $data['referenceId'];
        }
        elseif (\array_key_exists('referenceId', $data) && $data['referenceId'] === null) {
            $object->referenceId = null;
        }
        if (\array_key_exists('referenceDocType', $data) && $data['referenceDocType'] !== null) {
            $object->referenceDocType = $data['referenceDocType'];
        }
        elseif (\array_key_exists('referenceDocType', $data) && $data['referenceDocType'] === null) {
            $object->referenceDocType = null;
        }
        if (\array_key_exists('supportsCancellation', $data)) {
            $object->supportsCancellation = $data['supportsCancellation'];
        }
        if (\array_key_exists('businessProcessScope', $data)) {
            $value = $data['businessProcessScope'];
            if (is_string($data['businessProcessScope'])) {
                $value = $data['businessProcessScope'];
            }
            $object->businessProcessScope = $value;
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $value_1 = $data['lifeCycle'];
            if (is_string($data['lifeCycle'])) {
                $value_1 = $data['lifeCycle'];
            }
            $object->lifeCycle = $value_1;
        }
        if (\array_key_exists('startDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['startDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['startDate'], 'Y-m-d\TH:i:sP');
            }
            $object->startDate = $date;
        }
        if (\array_key_exists('endDate', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['endDate']);
            if (false === $date_1) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['endDate'], 'Y-m-d\TH:i:sP');
            }
            $object->endDate = $date_1;
        }
        if (\array_key_exists('finished', $data)) {
            $object->finished = $data['finished'];
        }
        if (\array_key_exists('stateHistory', $data) && $data['stateHistory'] !== null) {
            $values = [];
            foreach ($data['stateHistory'] as $value_2) {
                $values[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\BusinessProcessState::class, 'json', $context);
            }
            $object->stateHistory = $values;
        }
        elseif (\array_key_exists('stateHistory', $data) && $data['stateHistory'] === null) {
            $object->stateHistory = null;
        }
        if (\array_key_exists('currentState', $data) && $data['currentState'] !== null) {
            $object->currentState = $data['currentState'];
        }
        elseif (\array_key_exists('currentState', $data) && $data['currentState'] === null) {
            $object->currentState = null;
        }
        if (\array_key_exists('lastReportedProgress', $data) && $data['lastReportedProgress'] !== null) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastReportedProgress']);
            if (false === $date_2) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['lastReportedProgress'], 'Y-m-d\TH:i:sP');
            }
            $object->lastReportedProgress = $date_2;
        }
        elseif (\array_key_exists('lastReportedProgress', $data) && $data['lastReportedProgress'] === null) {
            $object->lastReportedProgress = null;
        }
        if (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] !== null) {
            $object->continuationBusinessProcessId = $data['continuationBusinessProcessId'];
        }
        elseif (\array_key_exists('continuationBusinessProcessId', $data) && $data['continuationBusinessProcessId'] === null) {
            $object->continuationBusinessProcessId = null;
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'BusinessProcessDetails' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['id'] = $data->id ?? null;
        $dataArray['processDefinitionId'] = $data->processDefinitionId ?? null;
        if (array_key_exists('referenceId', get_object_vars($data)) && null !== ($data->referenceId ?? null)) {
            $dataArray['referenceId'] = $data->referenceId ?? null;
        }
        if (array_key_exists('referenceDocType', get_object_vars($data)) && null !== ($data->referenceDocType ?? null)) {
            $dataArray['referenceDocType'] = $data->referenceDocType ?? null;
        }
        $dataArray['supportsCancellation'] = $data->supportsCancellation ?? null;
        $value = $data->businessProcessScope ?? null;
        if (is_string($data->businessProcessScope ?? null)) {
            $value = $data->businessProcessScope ?? null;
        }
        $dataArray['businessProcessScope'] = $value;
        $value_1 = $data->lifeCycle ?? null;
        if (is_string($data->lifeCycle ?? null)) {
            $value_1 = $data->lifeCycle ?? null;
        }
        $dataArray['lifeCycle'] = $value_1;
        $dataArray['startDate'] = ($data->startDate ?? null)->format('Y-m-d\TH:i:sP');
        $dataArray['endDate'] = ($data->endDate ?? null)->format('Y-m-d\TH:i:sP');
        $dataArray['finished'] = $data->finished ?? null;
        if (array_key_exists('stateHistory', get_object_vars($data)) && null !== ($data->stateHistory ?? null)) {
            $values = [];
            foreach ($data->stateHistory ?? null as $value_2) {
                $values[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['stateHistory'] = $values;
        }
        if (array_key_exists('currentState', get_object_vars($data)) && null !== ($data->currentState ?? null)) {
            $dataArray['currentState'] = $data->currentState ?? null;
        }
        if (array_key_exists('lastReportedProgress', get_object_vars($data)) && null !== ($data->lastReportedProgress ?? null)) {
            $dataArray['lastReportedProgress'] = ($data->lastReportedProgress ?? null)?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('continuationBusinessProcessId', get_object_vars($data)) && null !== ($data->continuationBusinessProcessId ?? null)) {
            $dataArray['continuationBusinessProcessId'] = $data->continuationBusinessProcessId ?? null;
        }
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessProcess::class => false];
    }
}