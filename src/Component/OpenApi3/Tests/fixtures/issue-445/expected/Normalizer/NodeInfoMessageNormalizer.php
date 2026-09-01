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
class NodeInfoMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\NodeInfoMessage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\NodeInfoMessage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\NodeInfoMessage();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('deduplicate', $data) && \is_int($data['deduplicate'])) {
            $data['deduplicate'] = (bool) $data['deduplicate'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
            unset($data['id']);
        }
        if (\array_key_exists('retries', $data)) {
            $object->retries = $data['retries'];
            unset($data['retries']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
            unset($data['priority']);
        }
        if (\array_key_exists('deduplicate', $data)) {
            $object->deduplicate = $data['deduplicate'];
            unset($data['deduplicate']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('nodeId', $data) && $data['nodeId'] !== null) {
            $object->nodeId = $data['nodeId'];
            unset($data['nodeId']);
        }
        elseif (\array_key_exists('nodeId', $data) && $data['nodeId'] === null) {
            $object->nodeId = null;
            unset($data['nodeId']);
        }
        if (\array_key_exists('hostName', $data) && $data['hostName'] !== null) {
            $object->hostName = $data['hostName'];
            unset($data['hostName']);
        }
        elseif (\array_key_exists('hostName', $data) && $data['hostName'] === null) {
            $object->hostName = null;
            unset($data['hostName']);
        }
        if (\array_key_exists('lastResponseTime', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastResponseTime']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['lastResponseTime'], 'Y-m-d\TH:i:sP');
            }
            $object->lastResponseTime = $date;
            unset($data['lastResponseTime']);
        }
        if (\array_key_exists('serviceName', $data) && $data['serviceName'] !== null) {
            $object->serviceName = $data['serviceName'];
            unset($data['serviceName']);
        }
        elseif (\array_key_exists('serviceName', $data) && $data['serviceName'] === null) {
            $object->serviceName = null;
            unset($data['serviceName']);
        }
        if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
            $object->fileVersion = $data['fileVersion'];
            unset($data['fileVersion']);
        }
        elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
            $object->fileVersion = null;
            unset($data['fileVersion']);
        }
        if (\array_key_exists('productVersion', $data) && $data['productVersion'] !== null) {
            $object->productVersion = $data['productVersion'];
            unset($data['productVersion']);
        }
        elseif (\array_key_exists('productVersion', $data) && $data['productVersion'] === null) {
            $object->productVersion = null;
            unset($data['productVersion']);
        }
        if (\array_key_exists('release', $data) && $data['release'] !== null) {
            $object->release = $data['release'];
            unset($data['release']);
        }
        elseif (\array_key_exists('release', $data) && $data['release'] === null) {
            $object->release = null;
            unset($data['release']);
        }
        if (\array_key_exists('logLevel', $data) && $data['logLevel'] !== null) {
            $object->logLevel = $data['logLevel'];
            unset($data['logLevel']);
        }
        elseif (\array_key_exists('logLevel', $data) && $data['logLevel'] === null) {
            $object->logLevel = null;
            unset($data['logLevel']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        $dataArray['retries'] = $data->retries ?? null;
        $dataArray['priority'] = $data->priority ?? null;
        $dataArray['deduplicate'] = $data->deduplicate ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('nodeId', get_object_vars($data)) && null !== ($data->nodeId ?? null)) {
            $dataArray['nodeId'] = $data->nodeId ?? null;
        }
        if (array_key_exists('hostName', get_object_vars($data)) && null !== ($data->hostName ?? null)) {
            $dataArray['hostName'] = $data->hostName ?? null;
        }
        if (array_key_exists('lastResponseTime', get_object_vars($data)) && null !== ($data->lastResponseTime ?? null)) {
            $dataArray['lastResponseTime'] = ($data->lastResponseTime ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('serviceName', get_object_vars($data)) && null !== ($data->serviceName ?? null)) {
            $dataArray['serviceName'] = $data->serviceName ?? null;
        }
        if (array_key_exists('fileVersion', get_object_vars($data)) && null !== ($data->fileVersion ?? null)) {
            $dataArray['fileVersion'] = $data->fileVersion ?? null;
        }
        if (array_key_exists('productVersion', get_object_vars($data)) && null !== ($data->productVersion ?? null)) {
            $dataArray['productVersion'] = $data->productVersion ?? null;
        }
        if (array_key_exists('release', get_object_vars($data)) && null !== ($data->release ?? null)) {
            $dataArray['release'] = $data->release ?? null;
        }
        if (array_key_exists('logLevel', get_object_vars($data)) && null !== ($data->logLevel ?? null)) {
            $dataArray['logLevel'] = $data->logLevel ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\NodeInfoMessage::class => false];
    }
}