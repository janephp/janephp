<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TopBooksGetLdjsonResponse200HydraViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200HydraView::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200HydraView::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200HydraView();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('@id', $data)) {
            $object->setId($data['@id']);
            unset($data['@id']);
        }
        if (\array_key_exists('@type', $data)) {
            $object->setType($data['@type']);
            unset($data['@type']);
        }
        if (\array_key_exists('hydra:first', $data)) {
            $object->setHydraFirst($data['hydra:first']);
            unset($data['hydra:first']);
        }
        if (\array_key_exists('hydra:last', $data)) {
            $object->setHydraLast($data['hydra:last']);
            unset($data['hydra:last']);
        }
        if (\array_key_exists('hydra:previous', $data)) {
            $object->setHydraPrevious($data['hydra:previous']);
            unset($data['hydra:previous']);
        }
        if (\array_key_exists('hydra:next', $data)) {
            $object->setHydraNext($data['hydra:next']);
            unset($data['hydra:next']);
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['@id'] = $data->getId();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['@type'] = $data->getType();
        }
        if ($data->isInitialized('hydraFirst') && null !== $data->getHydraFirst()) {
            $dataArray['hydra:first'] = $data->getHydraFirst();
        }
        if ($data->isInitialized('hydraLast') && null !== $data->getHydraLast()) {
            $dataArray['hydra:last'] = $data->getHydraLast();
        }
        if ($data->isInitialized('hydraPrevious') && null !== $data->getHydraPrevious()) {
            $dataArray['hydra:previous'] = $data->getHydraPrevious();
        }
        if ($data->isInitialized('hydraNext') && null !== $data->getHydraNext()) {
            $dataArray['hydra:next'] = $data->getHydraNext();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\ApiPlatform\Demo\Model\TopBooksGetLdjsonResponse200HydraView::class => false];
    }
}