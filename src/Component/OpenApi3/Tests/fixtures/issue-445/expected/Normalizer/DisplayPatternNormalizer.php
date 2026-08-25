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
            $object->setTemplateEngine($value);
        }
        if (\array_key_exists('displayPatternType', $data)) {
            $value_1 = $data['displayPatternType'];
            if (is_string($data['displayPatternType'])) {
                $value_1 = $data['displayPatternType'];
            }
            $object->setDisplayPatternType($value_1);
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
            $object->setTemplates($value_2);
        }
        elseif (\array_key_exists('templates', $data) && $data['templates'] === null) {
            $object->setTemplates(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->getTemplateEngine();
        if (is_string($data->getTemplateEngine())) {
            $value = $data->getTemplateEngine();
        }
        $dataArray['templateEngine'] = $value;
        $value_1 = $data->getDisplayPatternType();
        if (is_string($data->getDisplayPatternType())) {
            $value_1 = $data->getDisplayPatternType();
        }
        $dataArray['displayPatternType'] = $value_1;
        if ($data->isInitialized('templates') && null !== $data->getTemplates()) {
            $value_2 = $data->getTemplates();
            if (is_object($data->getTemplates())) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getTemplates() as $key => $value_3) {
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