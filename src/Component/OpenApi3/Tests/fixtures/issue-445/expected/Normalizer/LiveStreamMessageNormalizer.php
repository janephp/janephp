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
class LiveStreamMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\LiveStreamMessage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\LiveStreamMessage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\LiveStreamMessage();
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
        if (\array_key_exists('customerId', $data) && $data['customerId'] !== null) {
            $object->customerId = $data['customerId'];
            unset($data['customerId']);
        }
        elseif (\array_key_exists('customerId', $data) && $data['customerId'] === null) {
            $object->customerId = null;
            unset($data['customerId']);
        }
        if (\array_key_exists('customerAlias', $data) && $data['customerAlias'] !== null) {
            $object->customerAlias = $data['customerAlias'];
            unset($data['customerAlias']);
        }
        elseif (\array_key_exists('customerAlias', $data) && $data['customerAlias'] === null) {
            $object->customerAlias = null;
            unset($data['customerAlias']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['timestamp'], 'Y-m-d\TH:i:sP');
            }
            $object->timestamp = $date;
            unset($data['timestamp']);
        }
        if (\array_key_exists('scope', $data) && $data['scope'] !== null) {
            $object->scope = $data['scope'];
            unset($data['scope']);
        }
        elseif (\array_key_exists('scope', $data) && $data['scope'] === null) {
            $object->scope = null;
            unset($data['scope']);
        }
        if (\array_key_exists('documentChange', $data) && $data['documentChange'] !== null) {
            $value = $data['documentChange'];
            if (is_array($data['documentChange']) and \array_key_exists('version', $data['documentChange']) and \array_key_exists('timeStamp', $data['documentChange'])) {
                $value = $this->denormalizer->denormalize($data['documentChange'], \PicturePark\API\Model\DocumentChange::class, 'json', $context);
            }
            $object->documentChange = $value;
            unset($data['documentChange']);
        }
        elseif (\array_key_exists('documentChange', $data) && $data['documentChange'] === null) {
            $object->documentChange = null;
            unset($data['documentChange']);
        }
        if (\array_key_exists('applicationEvent', $data) && $data['applicationEvent'] !== null) {
            $value_1 = $data['applicationEvent'];
            if (is_array($data['applicationEvent']) and \array_key_exists('timestamp', $data['applicationEvent']) and \array_key_exists('kind', $data['applicationEvent'])) {
                $value_1 = $this->denormalizer->denormalize($data['applicationEvent'], \PicturePark\API\Model\ApplicationEvent::class, 'json', $context);
            }
            $object->applicationEvent = $value_1;
            unset($data['applicationEvent']);
        }
        elseif (\array_key_exists('applicationEvent', $data) && $data['applicationEvent'] === null) {
            $object->applicationEvent = null;
            unset($data['applicationEvent']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if (array_key_exists('customerId', get_object_vars($data)) && null !== ($data->customerId ?? null)) {
            $dataArray['customerId'] = $data->customerId ?? null;
        }
        if (array_key_exists('customerAlias', get_object_vars($data)) && null !== ($data->customerAlias ?? null)) {
            $dataArray['customerAlias'] = $data->customerAlias ?? null;
        }
        if (array_key_exists('timestamp', get_object_vars($data)) && null !== ($data->timestamp ?? null)) {
            $dataArray['timestamp'] = ($data->timestamp ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('scope', get_object_vars($data)) && null !== ($data->scope ?? null)) {
            $dataArray['scope'] = $data->scope ?? null;
        }
        if (array_key_exists('documentChange', get_object_vars($data)) && null !== ($data->documentChange ?? null)) {
            $value = $data->documentChange ?? null;
            if (is_object($data->documentChange ?? null)) {
                $value = ($data->documentChange ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->documentChange ?? null, 'json', $context));
            }
            $dataArray['documentChange'] = $value;
        }
        if (array_key_exists('applicationEvent', get_object_vars($data)) && null !== ($data->applicationEvent ?? null)) {
            $value_1 = $data->applicationEvent ?? null;
            if (is_object($data->applicationEvent ?? null)) {
                $value_1 = ($data->applicationEvent ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->applicationEvent ?? null, 'json', $context));
            }
            $dataArray['applicationEvent'] = $value_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\LiveStreamMessage::class => false];
    }
}