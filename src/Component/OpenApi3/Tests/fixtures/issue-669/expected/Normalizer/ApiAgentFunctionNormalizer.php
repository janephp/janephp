<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiAgentFunctionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiAgentFunction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiAgentFunction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentFunction();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('api_key', $data)) {
            $object->apiKey = $data['api_key'];
            unset($data['api_key']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('created_by', $data)) {
            $object->createdBy = $data['created_by'];
            unset($data['created_by']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('faas_name', $data)) {
            $object->faasName = $data['faas_name'];
            unset($data['faas_name']);
        }
        if (\array_key_exists('faas_namespace', $data)) {
            $object->faasNamespace = $data['faas_namespace'];
            unset($data['faas_namespace']);
        }
        if (\array_key_exists('input_schema', $data)) {
            $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['input_schema'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->inputSchema = $values;
            unset($data['input_schema']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('output_schema', $data)) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['output_schema'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->outputSchema = $values_1;
            unset($data['output_schema']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_1;
            unset($data['updated_at']);
        }
        if (\array_key_exists('url', $data)) {
            $object->url = $data['url'];
            unset($data['url']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
        }
        foreach ($data as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apiKey', get_object_vars($data)) && null !== ($data->apiKey ?? null)) {
            $dataArray['api_key'] = $data->apiKey ?? null;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('createdBy', get_object_vars($data)) && null !== ($data->createdBy ?? null)) {
            $dataArray['created_by'] = $data->createdBy ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('faasName', get_object_vars($data)) && null !== ($data->faasName ?? null)) {
            $dataArray['faas_name'] = $data->faasName ?? null;
        }
        if (array_key_exists('faasNamespace', get_object_vars($data)) && null !== ($data->faasNamespace ?? null)) {
            $dataArray['faas_namespace'] = $data->faasNamespace ?? null;
        }
        if (array_key_exists('inputSchema', get_object_vars($data)) && null !== ($data->inputSchema ?? null)) {
            $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->inputSchema ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['input_schema'] = $values;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('outputSchema', get_object_vars($data)) && null !== ($data->outputSchema ?? null)) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->outputSchema ?? null as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['output_schema'] = $values_1;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('url', get_object_vars($data)) && null !== ($data->url ?? null)) {
            $dataArray['url'] = $data->url ?? null;
        }
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_2) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiAgentFunction::class => false];
    }
}