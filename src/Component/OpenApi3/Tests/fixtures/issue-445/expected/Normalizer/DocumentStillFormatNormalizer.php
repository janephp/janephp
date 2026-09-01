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
class DocumentStillFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DocumentStillFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DocumentStillFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DocumentStillFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->extension = $data['extension'];
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->extension = null;
            unset($data['extension']);
        }
        if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
            $value = $data['resizeAction'];
            if (is_array($data['resizeAction']) and \array_key_exists('width', $data['resizeAction']) and \array_key_exists('height', $data['resizeAction']) and \array_key_exists('resizeMode', $data['resizeAction'])) {
                $value = $this->denormalizer->denormalize($data['resizeAction'], \PicturePark\API\Model\ResizeAction::class, 'json', $context);
            }
            $object->resizeAction = $value;
            unset($data['resizeAction']);
        }
        elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
            $object->resizeAction = null;
            unset($data['resizeAction']);
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
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('extension', get_object_vars($data)) && null !== ($data->extension ?? null)) {
            $dataArray['extension'] = $data->extension ?? null;
        }
        if (array_key_exists('resizeAction', get_object_vars($data)) && null !== ($data->resizeAction ?? null)) {
            $value = $data->resizeAction ?? null;
            if (is_object($data->resizeAction ?? null)) {
                $value = ($data->resizeAction ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->resizeAction ?? null, 'json', $context));
            }
            $dataArray['resizeAction'] = $value;
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
        return [\PicturePark\API\Model\DocumentStillFormat::class => false];
    }
}