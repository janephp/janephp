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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiAgentPublic();
        if (\array_key_exists('temperature', $data) && \is_int($data['temperature'])) {
            $data['temperature'] = (double) $data['temperature'];
        }
        if (\array_key_exists('top_p', $data) && \is_int($data['top_p'])) {
            $data['top_p'] = (double) $data['top_p'];
        }
        if (\array_key_exists('provide_citations', $data) && \is_int($data['provide_citations'])) {
            $data['provide_citations'] = (bool) $data['provide_citations'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('chatbot', $data)) {
            $object->setChatbot($this->denormalizer->denormalize($data['chatbot'], \Jane\Generated\DigitalOcean\Model\ApiChatbot::class, 'json', $context));
            unset($data['chatbot']);
        }
        if (\array_key_exists('chatbot_identifiers', $data)) {
            $values = [];
            foreach ($data['chatbot_identifiers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiAgentChatbotIdentifier::class, 'json', $context);
            }
            $object->setChatbotIdentifiers($values);
            unset($data['chatbot_identifiers']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('deployment', $data)) {
            $object->setDeployment($this->denormalizer->denormalize($data['deployment'], \Jane\Generated\DigitalOcean\Model\ApiDeployment::class, 'json', $context));
            unset($data['deployment']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('if_case', $data)) {
            $object->setIfCase($data['if_case']);
            unset($data['if_case']);
        }
        if (\array_key_exists('instruction', $data)) {
            $object->setInstruction($data['instruction']);
            unset($data['instruction']);
        }
        if (\array_key_exists('k', $data)) {
            $object->setK($data['k']);
            unset($data['k']);
        }
        if (\array_key_exists('max_tokens', $data)) {
            $object->setMaxTokens($data['max_tokens']);
            unset($data['max_tokens']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($this->denormalizer->denormalize($data['model'], \Jane\Generated\DigitalOcean\Model\ApiModel::class, 'json', $context));
            unset($data['model']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
            unset($data['project_id']);
        }
        if (\array_key_exists('provide_citations', $data)) {
            $object->setProvideCitations($data['provide_citations']);
            unset($data['provide_citations']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
            unset($data['region']);
        }
        if (\array_key_exists('retrieval_method', $data)) {
            $object->setRetrievalMethod($data['retrieval_method']);
            unset($data['retrieval_method']);
        }
        if (\array_key_exists('route_created_at', $data)) {
            $object->setRouteCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['route_created_at']));
            unset($data['route_created_at']);
        }
        if (\array_key_exists('route_created_by', $data)) {
            $object->setRouteCreatedBy($data['route_created_by']);
            unset($data['route_created_by']);
        }
        if (\array_key_exists('route_name', $data)) {
            $object->setRouteName($data['route_name']);
            unset($data['route_name']);
        }
        if (\array_key_exists('route_uuid', $data)) {
            $object->setRouteUuid($data['route_uuid']);
            unset($data['route_uuid']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTags($values_1);
            unset($data['tags']);
        }
        if (\array_key_exists('temperature', $data)) {
            $object->setTemperature($data['temperature']);
            unset($data['temperature']);
        }
        if (\array_key_exists('template', $data)) {
            $object->setTemplate($this->denormalizer->denormalize($data['template'], \Jane\Generated\DigitalOcean\Model\ApiAgentTemplate::class, 'json', $context));
            unset($data['template']);
        }
        if (\array_key_exists('top_p', $data)) {
            $object->setTopP($data['top_p']);
            unset($data['top_p']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
        }
        if (\array_key_exists('version_hash', $data)) {
            $object->setVersionHash($data['version_hash']);
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
        if ($data->isInitialized('chatbot') && null !== $data->getChatbot()) {
            $dataArray['chatbot'] = $this->normalizer->normalize($data->getChatbot(), 'json', $context);
        }
        if ($data->isInitialized('chatbotIdentifiers') && null !== $data->getChatbotIdentifiers()) {
            $values = [];
            foreach ($data->getChatbotIdentifiers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['chatbot_identifiers'] = $values;
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('deployment') && null !== $data->getDeployment()) {
            $dataArray['deployment'] = $this->normalizer->normalize($data->getDeployment(), 'json', $context);
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('ifCase') && null !== $data->getIfCase()) {
            $dataArray['if_case'] = $data->getIfCase();
        }
        if ($data->isInitialized('instruction') && null !== $data->getInstruction()) {
            $dataArray['instruction'] = $data->getInstruction();
        }
        if ($data->isInitialized('k') && null !== $data->getK()) {
            $dataArray['k'] = $data->getK();
        }
        if ($data->isInitialized('maxTokens') && null !== $data->getMaxTokens()) {
            $dataArray['max_tokens'] = $data->getMaxTokens();
        }
        if ($data->isInitialized('model') && null !== $data->getModel()) {
            $dataArray['model'] = $this->normalizer->normalize($data->getModel(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('projectId') && null !== $data->getProjectId()) {
            $dataArray['project_id'] = $data->getProjectId();
        }
        if ($data->isInitialized('provideCitations') && null !== $data->getProvideCitations()) {
            $dataArray['provide_citations'] = $data->getProvideCitations();
        }
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion();
        }
        if ($data->isInitialized('retrievalMethod') && null !== $data->getRetrievalMethod()) {
            $dataArray['retrieval_method'] = $data->getRetrievalMethod();
        }
        if ($data->isInitialized('routeCreatedAt') && null !== $data->getRouteCreatedAt()) {
            $dataArray['route_created_at'] = $data->getRouteCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('routeCreatedBy') && null !== $data->getRouteCreatedBy()) {
            $dataArray['route_created_by'] = $data->getRouteCreatedBy();
        }
        if ($data->isInitialized('routeName') && null !== $data->getRouteName()) {
            $dataArray['route_name'] = $data->getRouteName();
        }
        if ($data->isInitialized('routeUuid') && null !== $data->getRouteUuid()) {
            $dataArray['route_uuid'] = $data->getRouteUuid();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_1 = [];
            foreach ($data->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['tags'] = $values_1;
        }
        if ($data->isInitialized('temperature') && null !== $data->getTemperature()) {
            $dataArray['temperature'] = $data->getTemperature();
        }
        if ($data->isInitialized('template') && null !== $data->getTemplate()) {
            $dataArray['template'] = $this->normalizer->normalize($data->getTemplate(), 'json', $context);
        }
        if ($data->isInitialized('topP') && null !== $data->getTopP()) {
            $dataArray['top_p'] = $data->getTopP();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('userId') && null !== $data->getUserId()) {
            $dataArray['user_id'] = $data->getUserId();
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
        }
        if ($data->isInitialized('versionHash') && null !== $data->getVersionHash()) {
            $dataArray['version_hash'] = $data->getVersionHash();
        }
        foreach ($data as $key => $value_2) {
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