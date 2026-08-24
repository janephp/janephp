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
class ProfileDnsServerProfileListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDnsServerProfileList::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDnsServerProfileList::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDnsServerProfileList();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hasMore', $data) && \is_int($data['hasMore'])) {
            $data['hasMore'] = (bool) $data['hasMore'];
        }
        if (\array_key_exists('totalCount', $data)) {
            $object->setTotalCount($data['totalCount']);
        }
        if (\array_key_exists('hasMore', $data)) {
            $object->setHasMore($data['hasMore']);
        }
        if (\array_key_exists('firstIndex', $data)) {
            $object->setFirstIndex($data['firstIndex']);
        }
        if (\array_key_exists('extra', $data)) {
            $object->setExtra($this->denormalizer->denormalize($data['extra'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRbacMetadata::class, 'json', $context));
        }
        if (\array_key_exists('list', $data)) {
            $values = [];
            foreach ($data['list'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDnsServerProfile::class, 'json', $context);
            }
            $object->setList($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('totalCount') && null !== $data->getTotalCount()) {
            $dataArray['totalCount'] = $data->getTotalCount();
        }
        if ($data->isInitialized('hasMore') && null !== $data->getHasMore()) {
            $dataArray['hasMore'] = $data->getHasMore();
        }
        if ($data->isInitialized('firstIndex') && null !== $data->getFirstIndex()) {
            $dataArray['firstIndex'] = $data->getFirstIndex();
        }
        if ($data->isInitialized('extra') && null !== $data->getExtra()) {
            $dataArray['extra'] = $data->getExtra() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getExtra(), 'json', $context));
        }
        if ($data->isInitialized('list') && null !== $data->getList()) {
            $values = [];
            foreach ($data->getList() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['list'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileDnsServerProfileList::class => false];
    }
}