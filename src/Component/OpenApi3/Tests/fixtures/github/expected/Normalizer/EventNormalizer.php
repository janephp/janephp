<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\Event::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\Event::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Event();
        if (\array_key_exists('public', $data) && \is_int($data['public'])) {
            $data['public'] = (bool) $data['public'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\EventConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('actor', $data)) {
            $object->setActor($this->denormalizer->denormalize($data['actor'], \Github\Model\Actor::class, 'json', $context));
            unset($data['actor']);
        }
        if (\array_key_exists('repo', $data)) {
            $object->setRepo($this->denormalizer->denormalize($data['repo'], \Github\Model\EventRepo::class, 'json', $context));
            unset($data['repo']);
        }
        if (\array_key_exists('org', $data)) {
            $object->setOrg($this->denormalizer->denormalize($data['org'], \Github\Model\Actor::class, 'json', $context));
            unset($data['org']);
        }
        if (\array_key_exists('payload', $data)) {
            $object->setPayload($this->denormalizer->denormalize($data['payload'], \Github\Model\EventPayload::class, 'json', $context));
            unset($data['payload']);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
            unset($data['public']);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
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
        $dataArray['id'] = $data->getId();
        $dataArray['type'] = $data->getType();
        $dataArray['actor'] = $this->normalizer->normalize($data->getActor(), 'json', $context);
        $dataArray['repo'] = $this->normalizer->normalize($data->getRepo(), 'json', $context);
        if ($data->isInitialized('org') && null !== $data->getOrg()) {
            $dataArray['org'] = $this->normalizer->normalize($data->getOrg(), 'json', $context);
        }
        $dataArray['payload'] = $this->normalizer->normalize($data->getPayload(), 'json', $context);
        $dataArray['public'] = $data->getPublic();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\EventConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\Event::class => false];
    }
}