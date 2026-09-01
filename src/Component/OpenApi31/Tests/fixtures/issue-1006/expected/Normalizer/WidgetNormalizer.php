<?php

namespace Jane\Component\OpenApi31\Tests\Issue1006\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Issue1006\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Issue1006\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WidgetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Issue1006\Validator\WidgetConstraint());
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('settings', $data)) {
            $object->settings = $this->denormalizer->denormalize($data['settings'], \Jane\Component\OpenApi31\Tests\Issue1006\Model\WidgetSettings::class, 'json', $context);
        }
        if (\array_key_exists('plain', $data)) {
            $object->plain = $this->denormalizer->denormalize($data['plain'], \Jane\Component\OpenApi31\Tests\Issue1006\Model\WidgetSettings::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('settings', get_object_vars($data)) && null !== ($data->settings ?? null)) {
            $dataArray['settings'] = ($data->settings ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Issue1006\Runtime\JsonObject($this->normalizer->normalize($data->settings ?? null, 'json', $context));
        }
        if (array_key_exists('plain', get_object_vars($data)) && null !== ($data->plain ?? null)) {
            $dataArray['plain'] = ($data->plain ?? null) === null ? null : new \Jane\Component\OpenApi31\Tests\Issue1006\Runtime\JsonObject($this->normalizer->normalize($data->plain ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Issue1006\Validator\WidgetConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Issue1006\Model\Widget::class => false];
    }
}