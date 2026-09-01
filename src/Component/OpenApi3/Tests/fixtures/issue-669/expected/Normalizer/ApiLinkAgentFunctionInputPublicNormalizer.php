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
class ApiLinkAgentFunctionInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('agent_uuid', $data)) {
            $object->agentUuid = $data['agent_uuid'];
            unset($data['agent_uuid']);
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
        if (\array_key_exists('function_name', $data)) {
            $object->functionName = $data['function_name'];
            unset($data['function_name']);
        }
        if (\array_key_exists('input_schema', $data)) {
            $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['input_schema'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->inputSchema = $values;
            unset($data['input_schema']);
        }
        if (\array_key_exists('output_schema', $data)) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['output_schema'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->outputSchema = $values_1;
            unset($data['output_schema']);
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
        if (array_key_exists('agentUuid', get_object_vars($data)) && null !== ($data->agentUuid ?? null)) {
            $dataArray['agent_uuid'] = $data->agentUuid ?? null;
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
        if (array_key_exists('functionName', get_object_vars($data)) && null !== ($data->functionName ?? null)) {
            $dataArray['function_name'] = $data->functionName ?? null;
        }
        if (array_key_exists('inputSchema', get_object_vars($data)) && null !== ($data->inputSchema ?? null)) {
            $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->inputSchema ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['input_schema'] = $values;
        }
        if (array_key_exists('outputSchema', get_object_vars($data)) && null !== ($data->outputSchema ?? null)) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->outputSchema ?? null as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['output_schema'] = $values_1;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic::class => false];
    }
}