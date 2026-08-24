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
class CheckRunNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CheckRun::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CheckRun::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CheckRun();
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
            $this->validate($data, new \Github\Validator\CheckRunConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('head_sha', $data)) {
            $object->setHeadSha($data['head_sha']);
            unset($data['head_sha']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('external_id', $data) && $data['external_id'] !== null) {
            $object->setExternalId($data['external_id']);
            unset($data['external_id']);
        }
        elseif (\array_key_exists('external_id', $data) && $data['external_id'] === null) {
            $object->setExternalId(null);
            unset($data['external_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
            $object->setHtmlUrl(null);
            unset($data['html_url']);
        }
        if (\array_key_exists('details_url', $data) && $data['details_url'] !== null) {
            $object->setDetailsUrl($data['details_url']);
            unset($data['details_url']);
        }
        elseif (\array_key_exists('details_url', $data) && $data['details_url'] === null) {
            $object->setDetailsUrl(null);
            unset($data['details_url']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('conclusion', $data) && $data['conclusion'] !== null) {
            $object->setConclusion($data['conclusion']);
            unset($data['conclusion']);
        }
        elseif (\array_key_exists('conclusion', $data) && $data['conclusion'] === null) {
            $object->setConclusion(null);
            unset($data['conclusion']);
        }
        if (\array_key_exists('started_at', $data) && $data['started_at'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['started_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setStartedAt($date);
            unset($data['started_at']);
        }
        elseif (\array_key_exists('started_at', $data) && $data['started_at'] === null) {
            $object->setStartedAt(null);
            unset($data['started_at']);
        }
        if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['completed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCompletedAt($date_1);
            unset($data['completed_at']);
        }
        elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
            $object->setCompletedAt(null);
            unset($data['completed_at']);
        }
        if (\array_key_exists('output', $data)) {
            $object->setOutput($this->denormalizer->denormalize($data['output'], \Github\Model\CheckRunOutput::class, 'json', $context));
            unset($data['output']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('check_suite', $data) && $data['check_suite'] !== null) {
            $object->setCheckSuite($this->denormalizer->denormalize($data['check_suite'], \Github\Model\CheckRunCheckSuite::class, 'json', $context));
            unset($data['check_suite']);
        }
        elseif (\array_key_exists('check_suite', $data) && $data['check_suite'] === null) {
            $object->setCheckSuite(null);
            unset($data['check_suite']);
        }
        if (\array_key_exists('app', $data) && $data['app'] !== null) {
            $object->setApp($this->denormalizer->denormalize($data['app'], \Github\Model\CheckRunApp::class, 'json', $context));
            unset($data['app']);
        }
        elseif (\array_key_exists('app', $data) && $data['app'] === null) {
            $object->setApp(null);
            unset($data['app']);
        }
        if (\array_key_exists('pull_requests', $data)) {
            $object->setPullRequests($data['pull_requests']);
            unset($data['pull_requests']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['head_sha'] = $data->getHeadSha();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['external_id'] = $data->getExternalId();
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['details_url'] = $data->getDetailsUrl();
        $dataArray['status'] = $data->getStatus();
        $dataArray['conclusion'] = $data->getConclusion();
        $dataArray['started_at'] = $data->getStartedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['completed_at'] = $data->getCompletedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['output'] = $data->getOutput() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getOutput(), 'json', $context));
        $dataArray['name'] = $data->getName();
        $dataArray['check_suite'] = $data->getCheckSuite() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getCheckSuite(), 'json', $context));
        $dataArray['app'] = $data->getApp() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getApp(), 'json', $context));
        $dataArray['pull_requests'] = $data->getPullRequests();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CheckRunConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CheckRun::class => false];
    }
}