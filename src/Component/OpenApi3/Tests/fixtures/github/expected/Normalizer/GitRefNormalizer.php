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
class GitRefNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\GitRef::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\GitRef::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\GitRef();
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
            $this->validate($data, new \Github\Validator\GitRefConstraint());
        }
        if (\array_key_exists('ref', $data)) {
            $object->setRef($data['ref']);
            unset($data['ref']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('object', $data)) {
            $object->setObject($this->denormalizer->denormalize($data['object'], \Github\Model\GitRefObject::class, 'json', $context));
            unset($data['object']);
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
        if ($data->isInitialized('ref') && null !== $data->getRef()) {
            $dataArray['ref'] = $data->getRef();
        }
        if ($data->isInitialized('nodeId') && null !== $data->getNodeId()) {
            $dataArray['node_id'] = $data->getNodeId();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('object') && null !== $data->getObject()) {
            $dataArray['object'] = $data->getObject() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getObject(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\GitRefConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\GitRef::class => false];
    }
}