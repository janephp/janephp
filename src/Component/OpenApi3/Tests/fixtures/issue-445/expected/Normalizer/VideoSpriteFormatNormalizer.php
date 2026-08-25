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
class VideoSpriteFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\VideoSpriteFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\VideoSpriteFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\VideoSpriteFormat();
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
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('spriteResizeAction', $data) && $data['spriteResizeAction'] !== null) {
            $value = $data['spriteResizeAction'];
            if (is_array($data['spriteResizeAction']) and \array_key_exists('width', $data['spriteResizeAction']) and \array_key_exists('height', $data['spriteResizeAction']) and \array_key_exists('resizeMode', $data['spriteResizeAction'])) {
                $value = $this->denormalizer->denormalize($data['spriteResizeAction'], \PicturePark\API\Model\ResizeAction::class, 'json', $context);
            }
            $object->setSpriteResizeAction($value);
            unset($data['spriteResizeAction']);
        }
        elseif (\array_key_exists('spriteResizeAction', $data) && $data['spriteResizeAction'] === null) {
            $object->setSpriteResizeAction(null);
            unset($data['spriteResizeAction']);
        }
        if (\array_key_exists('maxNumberOfSprites', $data)) {
            $object->setMaxNumberOfSprites($data['maxNumberOfSprites']);
            unset($data['maxNumberOfSprites']);
        }
        if (\array_key_exists('quality', $data)) {
            $object->setQuality($data['quality']);
            unset($data['quality']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
            unset($data['extension']);
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
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('spriteResizeAction') && null !== $data->getSpriteResizeAction()) {
            $value = $data->getSpriteResizeAction();
            if (is_object($data->getSpriteResizeAction())) {
                $value = $data->getSpriteResizeAction() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getSpriteResizeAction(), 'json', $context));
            }
            $dataArray['spriteResizeAction'] = $value;
        }
        if ($data->isInitialized('maxNumberOfSprites') && null !== $data->getMaxNumberOfSprites()) {
            $dataArray['maxNumberOfSprites'] = $data->getMaxNumberOfSprites();
        }
        if ($data->isInitialized('quality') && null !== $data->getQuality()) {
            $dataArray['quality'] = $data->getQuality();
        }
        if ($data->isInitialized('extension') && null !== $data->getExtension()) {
            $dataArray['extension'] = $data->getExtension();
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
        return [\PicturePark\API\Model\VideoSpriteFormat::class => false];
    }
}