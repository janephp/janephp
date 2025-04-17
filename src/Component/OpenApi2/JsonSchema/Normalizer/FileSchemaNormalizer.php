<?php

namespace Jane\Component\OpenApi2\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FileSchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []) : bool
    {
        return $type === 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FileSchema';
    }
    public function supportsNormalization($data, $format = null, array $context = []) : bool
    {
        return $data instanceof \Jane\Component\OpenApi2\JsonSchema\Model\FileSchema;
    }
    /**
     * @return mixed
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []) : mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi2\JsonSchema\Model\FileSchema();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('default', $data) && $data['default'] !== null) {
            $object->setDefault($data['default']);
            unset($data['default']);
        }
        elseif (\array_key_exists('default', $data) && $data['default'] === null) {
            $object->setDefault(null);
        }
        if (\array_key_exists('required', $data) && $data['required'] !== null) {
            $values = [];
            foreach ($data['required'] as $value) {
                $values[] = $value;
            }
            $object->setRequired($values);
            unset($data['required']);
        }
        elseif (\array_key_exists('required', $data) && $data['required'] === null) {
            $object->setRequired(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('readOnly', $data) && $data['readOnly'] !== null) {
            $object->setReadOnly($data['readOnly']);
            unset($data['readOnly']);
        }
        elseif (\array_key_exists('readOnly', $data) && $data['readOnly'] === null) {
            $object->setReadOnly(null);
        }
        if (\array_key_exists('externalDocs', $data) && $data['externalDocs'] !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data['externalDocs'], 'Jane\\Component\\OpenApi2\\JsonSchema\\Model\\ExternalDocs', 'json', $context));
            unset($data['externalDocs']);
        }
        elseif (\array_key_exists('externalDocs', $data) && $data['externalDocs'] === null) {
            $object->setExternalDocs(null);
        }
        if (\array_key_exists('example', $data) && $data['example'] !== null) {
            $object->setExample($data['example']);
            unset($data['example']);
        }
        elseif (\array_key_exists('example', $data) && $data['example'] === null) {
            $object->setExample(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/^x-/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($object->isInitialized('format') && null !== $object->getFormat()) {
            $dataArray['format'] = $object->getFormat();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $dataArray['title'] = $object->getTitle();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $dataArray['description'] = $object->getDescription();
        }
        if ($object->isInitialized('default') && null !== $object->getDefault()) {
            $dataArray['default'] = $object->getDefault();
        }
        if ($object->isInitialized('required') && null !== $object->getRequired()) {
            $values = [];
            foreach ($object->getRequired() as $value) {
                $values[] = $value;
            }
            $dataArray['required'] = $values;
        }
        $dataArray['type'] = $object->getType();
        if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
            $dataArray['readOnly'] = $object->getReadOnly();
        }
        if ($object->isInitialized('externalDocs') && null !== $object->getExternalDocs()) {
            $dataArray['externalDocs'] = $this->normalizer->normalize($object->getExternalDocs(), 'json', $context);
        }
        if ($object->isInitialized('example') && null !== $object->getExample()) {
            $dataArray['example'] = $object->getExample();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/^x-/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return ['Jane\\Component\\OpenApi2\\JsonSchema\\Model\\FileSchema' => false];
    }
}