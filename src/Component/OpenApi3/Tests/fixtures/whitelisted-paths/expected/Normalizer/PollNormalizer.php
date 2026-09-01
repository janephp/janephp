<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PollNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\Poll::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\Poll::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\Poll();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('options', $data)) {
            $values = [];
            foreach ($data['options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\PollOption::class, 'json', $context);
            }
            $object->options = $values;
            unset($data['options']);
        }
        if (\array_key_exists('voting_status', $data)) {
            $object->votingStatus = $data['voting_status'];
            unset($data['voting_status']);
        }
        if (\array_key_exists('end_datetime', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['end_datetime']);
            if (false === $date) {
                throw new \Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['end_datetime'], 'Y-m-d\TH:i:sP');
            }
            $object->endDatetime = $date;
            unset($data['end_datetime']);
        }
        if (\array_key_exists('duration_minutes', $data)) {
            $object->durationMinutes = $data['duration_minutes'];
            unset($data['duration_minutes']);
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
        $dataArray['id'] = $data->id ?? null;
        $values = [];
        foreach ($data->options ?? null as $value) {
            $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['options'] = $values;
        $dataArray['voting_status'] = $data->votingStatus ?? null;
        $dataArray['end_datetime'] = ($data->endDatetime ?? null)->format('Y-m-d\TH:i:sP');
        if (array_key_exists('durationMinutes', get_object_vars($data)) && null !== ($data->durationMinutes ?? null)) {
            $dataArray['duration_minutes'] = $data->durationMinutes ?? null;
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\Poll::class => false];
    }
}