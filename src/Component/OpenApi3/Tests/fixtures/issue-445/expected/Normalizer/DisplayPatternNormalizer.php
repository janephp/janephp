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
class DisplayPatternNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DisplayPattern::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DisplayPattern::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DisplayPattern();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('templateEngine', $data)) {
            $value = $data['templateEngine'];
            if (is_string($data['templateEngine'])) {
                $value = $data['templateEngine'];
            }
            $object->templateEngine = $value;
        }
        if (\array_key_exists('displayPatternType', $data)) {
            $value_1 = $data['displayPatternType'];
            if (is_string($data['displayPatternType'])) {
                $value_1 = $data['displayPatternType'];
            }
            $object->displayPatternType = $value_1;
        }
        if (\array_key_exists('templates', $data) && $data['templates'] !== null) {
            $value_2 = $data['templates'];
            if (is_array($data['templates']) && $this->isOnlyNumericKeys($data['templates'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['templates'] as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            }
            $object->templates = $value_2;
        }
        elseif (\array_key_exists('templates', $data) && $data['templates'] === null) {
            $object->templates = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->templateEngine ?? null;
        if (is_string($data->templateEngine ?? null)) {
            $value = $data->templateEngine ?? null;
        }
        $dataArray['templateEngine'] = $value;
        $value_1 = $data->displayPatternType ?? null;
        if (is_string($data->displayPatternType ?? null)) {
            $value_1 = $data->displayPatternType ?? null;
        }
        $dataArray['displayPatternType'] = $value_1;
        if (array_key_exists('templates', get_object_vars($data)) && null !== ($data->templates ?? null)) {
            $value_2 = $data->templates ?? null;
            if (is_object($data->templates ?? null)) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->templates ?? null as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            }
            $dataArray['templates'] = $value_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DisplayPattern::class => false];
    }
}