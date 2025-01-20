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
class ReleaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\Release::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\Release::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Release();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReleaseConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('assets_url', $data)) {
            $object->setAssetsUrl($data['assets_url']);
            unset($data['assets_url']);
        }
        if (\array_key_exists('upload_url', $data)) {
            $object->setUploadUrl($data['upload_url']);
            unset($data['upload_url']);
        }
        if (\array_key_exists('tarball_url', $data) && $data['tarball_url'] !== null) {
            $object->setTarballUrl($data['tarball_url']);
            unset($data['tarball_url']);
        }
        elseif (\array_key_exists('tarball_url', $data) && $data['tarball_url'] === null) {
            $object->setTarballUrl(null);
        }
        if (\array_key_exists('zipball_url', $data) && $data['zipball_url'] !== null) {
            $object->setZipballUrl($data['zipball_url']);
            unset($data['zipball_url']);
        }
        elseif (\array_key_exists('zipball_url', $data) && $data['zipball_url'] === null) {
            $object->setZipballUrl(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('tag_name', $data)) {
            $object->setTagName($data['tag_name']);
            unset($data['tag_name']);
        }
        if (\array_key_exists('target_commitish', $data)) {
            $object->setTargetCommitish($data['target_commitish']);
            unset($data['target_commitish']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('body', $data) && $data['body'] !== null) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        elseif (\array_key_exists('body', $data) && $data['body'] === null) {
            $object->setBody(null);
        }
        if (\array_key_exists('draft', $data)) {
            $object->setDraft($data['draft']);
            unset($data['draft']);
        }
        if (\array_key_exists('prerelease', $data)) {
            $object->setPrerelease($data['prerelease']);
            unset($data['prerelease']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('published_at', $data) && $data['published_at'] !== null) {
            $object->setPublishedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['published_at']));
            unset($data['published_at']);
        }
        elseif (\array_key_exists('published_at', $data) && $data['published_at'] === null) {
            $object->setPublishedAt(null);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], \Github\Model\SimpleUser::class, 'json', $context));
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('assets', $data)) {
            $values = [];
            foreach ($data['assets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\ReleaseAsset::class, 'json', $context);
            }
            $object->setAssets($values);
            unset($data['assets']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
            unset($data['body_html']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
            unset($data['body_text']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['assets_url'] = $data->getAssetsUrl();
        $dataArray['upload_url'] = $data->getUploadUrl();
        $dataArray['tarball_url'] = $data->getTarballUrl();
        $dataArray['zipball_url'] = $data->getZipballUrl();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['tag_name'] = $data->getTagName();
        $dataArray['target_commitish'] = $data->getTargetCommitish();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        $dataArray['draft'] = $data->getDraft();
        $dataArray['prerelease'] = $data->getPrerelease();
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['published_at'] = $data->getPublishedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['author'] = $this->normalizer->normalize($data->getAuthor(), 'json', $context);
        $values = [];
        foreach ($data->getAssets() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['assets'] = $values;
        if ($data->isInitialized('bodyHtml') && null !== $data->getBodyHtml()) {
            $dataArray['body_html'] = $data->getBodyHtml();
        }
        if ($data->isInitialized('bodyText') && null !== $data->getBodyText()) {
            $dataArray['body_text'] = $data->getBodyText();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReleaseConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\Release::class => false];
    }
}