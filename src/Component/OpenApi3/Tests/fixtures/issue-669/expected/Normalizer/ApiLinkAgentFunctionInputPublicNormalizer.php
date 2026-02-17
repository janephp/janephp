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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiLinkAgentFunctionInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('agent_uuid', $data)) {
            $object->setAgentUuid($data['agent_uuid']);
            unset($data['agent_uuid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('faas_name', $data)) {
            $object->setFaasName($data['faas_name']);
            unset($data['faas_name']);
        }
        if (\array_key_exists('faas_namespace', $data)) {
            $object->setFaasNamespace($data['faas_namespace']);
            unset($data['faas_namespace']);
        }
        if (\array_key_exists('function_name', $data)) {
            $object->setFunctionName($data['function_name']);
            unset($data['function_name']);
        }
        if (\array_key_exists('input_schema', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['input_schema'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setInputSchema($values);
            unset($data['input_schema']);
        }
        if (\array_key_exists('output_schema', $data)) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['output_schema'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setOutputSchema($values_1);
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
        if ($data->isInitialized('agentUuid') && null !== $data->getAgentUuid()) {
            $dataArray['agent_uuid'] = $data->getAgentUuid();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('faasName') && null !== $data->getFaasName()) {
            $dataArray['faas_name'] = $data->getFaasName();
        }
        if ($data->isInitialized('faasNamespace') && null !== $data->getFaasNamespace()) {
            $dataArray['faas_namespace'] = $data->getFaasNamespace();
        }
        if ($data->isInitialized('functionName') && null !== $data->getFunctionName()) {
            $dataArray['function_name'] = $data->getFunctionName();
        }
        if ($data->isInitialized('inputSchema') && null !== $data->getInputSchema()) {
            $values = [];
            foreach ($data->getInputSchema() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['input_schema'] = $values;
        }
        if ($data->isInitialized('outputSchema') && null !== $data->getOutputSchema()) {
            $values_1 = [];
            foreach ($data->getOutputSchema() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $dataArray['output_schema'] = $values_1;
        }
        foreach ($data as $key_2 => $value_2) {
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