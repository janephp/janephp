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
class IssueSearchResultItemPullRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\IssueSearchResultItemPullRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\IssueSearchResultItemPullRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\IssueSearchResultItemPullRequest();
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
            $this->validate($data, new \Github\Validator\IssueSearchResultItemPullRequestConstraint());
        }
        if (\array_key_exists('merged_at', $data) && $data['merged_at'] !== null) {
            $object->setMergedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['merged_at']));
            unset($data['merged_at']);
        }
        elseif (\array_key_exists('merged_at', $data) && $data['merged_at'] === null) {
            $object->setMergedAt(null);
        }
        if (\array_key_exists('diff_url', $data) && $data['diff_url'] !== null) {
            $object->setDiffUrl($data['diff_url']);
            unset($data['diff_url']);
        }
        elseif (\array_key_exists('diff_url', $data) && $data['diff_url'] === null) {
            $object->setDiffUrl(null);
        }
        if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
            $object->setHtmlUrl(null);
        }
        if (\array_key_exists('patch_url', $data) && $data['patch_url'] !== null) {
            $object->setPatchUrl($data['patch_url']);
            unset($data['patch_url']);
        }
        elseif (\array_key_exists('patch_url', $data) && $data['patch_url'] === null) {
            $object->setPatchUrl(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
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
        if ($data->isInitialized('mergedAt')) {
            $dataArray['merged_at'] = $data->getMergedAt()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['diff_url'] = $data->getDiffUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['patch_url'] = $data->getPatchUrl();
        $dataArray['url'] = $data->getUrl();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\IssueSearchResultItemPullRequestConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\IssueSearchResultItemPullRequest::class => false];
    }
}