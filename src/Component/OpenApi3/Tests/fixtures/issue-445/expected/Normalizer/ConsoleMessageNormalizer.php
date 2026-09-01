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
class ConsoleMessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ConsoleMessage::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ConsoleMessage::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ConsoleMessage();
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
        if (\array_key_exists('command', $data) && $data['command'] !== null) {
            $object->command = $data['command'];
            unset($data['command']);
        }
        elseif (\array_key_exists('command', $data) && $data['command'] === null) {
            $object->command = null;
            unset($data['command']);
        }
        if (\array_key_exists('arguments', $data) && $data['arguments'] !== null) {
            $values = [];
            foreach ($data['arguments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\TupleOfStringAndString::class, 'json', $context);
            }
            $object->arguments = $values;
            unset($data['arguments']);
        }
        elseif (\array_key_exists('arguments', $data) && $data['arguments'] === null) {
            $object->arguments = null;
            unset($data['arguments']);
        }
        if (\array_key_exists('targetQueue', $data) && $data['targetQueue'] !== null) {
            $object->targetQueue = $data['targetQueue'];
            unset($data['targetQueue']);
        }
        elseif (\array_key_exists('targetQueue', $data) && $data['targetQueue'] === null) {
            $object->targetQueue = null;
            unset($data['targetQueue']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        $dataArray['retries'] = $data->retries ?? null;
        $dataArray['priority'] = $data->priority ?? null;
        $dataArray['deduplicate'] = $data->deduplicate ?? null;
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('command', get_object_vars($data)) && null !== ($data->command ?? null)) {
            $dataArray['command'] = $data->command ?? null;
        }
        if (array_key_exists('arguments', get_object_vars($data)) && null !== ($data->arguments ?? null)) {
            $values = [];
            foreach ($data->arguments ?? null as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['arguments'] = $values;
        }
        if (array_key_exists('targetQueue', get_object_vars($data)) && null !== ($data->targetQueue ?? null)) {
            $dataArray['targetQueue'] = $data->targetQueue ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ConsoleMessage::class => false];
    }
}