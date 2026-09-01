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
class ApiAgentPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiAgentPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiAgentPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (float) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (float) $data['top_p'];
        }
        if (\array_key_exists('provide_citations', $data) && \is_int($data['provide_citations'])) {
            $data['provide_citations'] = (bool) $data['provide_citations'];
        }
        if (\array_key_exists('chatbot', $data)) {
            $object->chatbot = $this->denormalizer->denormalize($data['chatbot'], \Jane\Generated\DigitalOcean\Model\ApiChatbot::class, 'json', $context);
            unset($data['chatbot']);
        }
        if (\array_key_exists('chatbot_identifiers', $data)) {
            $values = [];
            foreach ($data['chatbot_identifiers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiAgentChatbotIdentifier::class, 'json', $context);
            }
            $object->chatbotIdentifiers = $values;
            unset($data['chatbot_identifiers']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('deployment', $data)) {
            $object->deployment = $this->denormalizer->denormalize($data['deployment'], \Jane\Generated\DigitalOcean\Model\ApiDeployment::class, 'json', $context);
            unset($data['deployment']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('if_case', $data)) {
            $object->ifCase = $data['if_case'];
            unset($data['if_case']);
        }
        if (\array_key_exists('instruction', $data)) {
            $object->instruction = $data['instruction'];
            unset($data['instruction']);
        }
        if (\array_key_exists('k', $data)) {
            $object->k = $data['k'];
            unset($data['k']);
        }
        if (\array_key_exists('max_tokens', $data)) {
            $object->maxTokens = $data['max_tokens'];
            unset($data['max_tokens']);
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $this->denormalizer->denormalize($data['model'], \Jane\Generated\DigitalOcean\Model\ApiModel::class, 'json', $context);
            unset($data['model']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->projectId = $data['project_id'];
            unset($data['project_id']);
        }
        if (\array_key_exists('provide_citations', $data)) {
            $object->provideCitations = $data['provide_citations'];
            unset($data['provide_citations']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('retrieval_method', $data)) {
            $object->retrievalMethod = $data['retrieval_method'];
            unset($data['retrieval_method']);
        }
        if (\array_key_exists('route_created_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['route_created_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['route_created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->routeCreatedAt = $date_1;
            unset($data['route_created_at']);
        }
        if (\array_key_exists('route_created_by', $data)) {
            $object->routeCreatedBy = $data['route_created_by'];
            unset($data['route_created_by']);
        }
        if (\array_key_exists('route_name', $data)) {
            $object->routeName = $data['route_name'];
            unset($data['route_name']);
        }
        if (\array_key_exists('route_uuid', $data)) {
            $object->routeUuid = $data['route_uuid'];
            unset($data['route_uuid']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->tags = $values_1;
            unset($data['tags']);
        }
        if (\array_key_exists('temperature', $data)) {
            $object->temperature = $data['temperature'];
            unset($data['temperature']);
        }
        if (\array_key_exists('template', $data)) {
            $object->template = $this->denormalizer->denormalize($data['template'], \Jane\Generated\DigitalOcean\Model\ApiAgentTemplate::class, 'json', $context);
            unset($data['template']);
        }
        if (\array_key_exists('top_p', $data)) {
            $object->topP = $data['top_p'];
            unset($data['top_p']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_2;
            unset($data['updated_at']);
        }
        if (\array_key_exists('url', $data)) {
            $object->url = $data['url'];
            unset($data['url']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->userId = $data['user_id'];
            unset($data['user_id']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
        }
        if (\array_key_exists('version_hash', $data)) {
            $object->versionHash = $data['version_hash'];
            unset($data['version_hash']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('chatbot', get_object_vars($data)) && null !== ($data->chatbot ?? null)) {
            $dataArray['chatbot'] = ($data->chatbot ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->chatbot ?? null, 'json', $context));
        }
        if (array_key_exists('chatbotIdentifiers', get_object_vars($data)) && null !== ($data->chatbotIdentifiers ?? null)) {
            $values = [];
            foreach ($data->chatbotIdentifiers ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['chatbot_identifiers'] = $values;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('deployment', get_object_vars($data)) && null !== ($data->deployment ?? null)) {
            $dataArray['deployment'] = ($data->deployment ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->deployment ?? null, 'json', $context));
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('ifCase', get_object_vars($data)) && null !== ($data->ifCase ?? null)) {
            $dataArray['if_case'] = $data->ifCase ?? null;
        }
        if (array_key_exists('instruction', get_object_vars($data)) && null !== ($data->instruction ?? null)) {
            $dataArray['instruction'] = $data->instruction ?? null;
        }
        if (array_key_exists('k', get_object_vars($data)) && null !== ($data->k ?? null)) {
            $dataArray['k'] = $data->k ?? null;
        }
        if (array_key_exists('maxTokens', get_object_vars($data)) && null !== ($data->maxTokens ?? null)) {
            $dataArray['max_tokens'] = $data->maxTokens ?? null;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = ($data->model ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->model ?? null, 'json', $context));
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['project_id'] = $data->projectId ?? null;
        }
        if (array_key_exists('provideCitations', get_object_vars($data)) && null !== ($data->provideCitations ?? null)) {
            $dataArray['provide_citations'] = $data->provideCitations ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('retrievalMethod', get_object_vars($data)) && null !== ($data->retrievalMethod ?? null)) {
            $dataArray['retrieval_method'] = $data->retrievalMethod ?? null;
        }
        if (array_key_exists('routeCreatedAt', get_object_vars($data)) && null !== ($data->routeCreatedAt ?? null)) {
            $dataArray['route_created_at'] = ($data->routeCreatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('routeCreatedBy', get_object_vars($data)) && null !== ($data->routeCreatedBy ?? null)) {
            $dataArray['route_created_by'] = $data->routeCreatedBy ?? null;
        }
        if (array_key_exists('routeName', get_object_vars($data)) && null !== ($data->routeName ?? null)) {
            $dataArray['route_name'] = $data->routeName ?? null;
        }
        if (array_key_exists('routeUuid', get_object_vars($data)) && null !== ($data->routeUuid ?? null)) {
            $dataArray['route_uuid'] = $data->routeUuid ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values_1 = [];
            foreach ($data->tags ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if (array_key_exists('temperature', get_object_vars($data)) && null !== ($data->temperature ?? null)) {
            $dataArray['temperature'] = $data->temperature ?? null;
        }
        if (array_key_exists('template', get_object_vars($data)) && null !== ($data->template ?? null)) {
            $dataArray['template'] = ($data->template ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->template ?? null, 'json', $context));
        }
        if (array_key_exists('topP', get_object_vars($data)) && null !== ($data->topP ?? null)) {
            $dataArray['top_p'] = $data->topP ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('url', get_object_vars($data)) && null !== ($data->url ?? null)) {
            $dataArray['url'] = $data->url ?? null;
        }
        if (array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['user_id'] = $data->userId ?? null;
        }
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
        }
        if (array_key_exists('versionHash', get_object_vars($data)) && null !== ($data->versionHash ?? null)) {
            $dataArray['version_hash'] = $data->versionHash ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiAgentPublic::class => false];
    }
}