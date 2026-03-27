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
class CommunityProfileFilesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CommunityProfileFiles::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CommunityProfileFiles::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CommunityProfileFiles();
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
            $this->validate($data, new \Github\Validator\CommunityProfileFilesConstraint());
        }
        if (\array_key_exists('code_of_conduct', $data) && $data['code_of_conduct'] !== null) {
            $object->setCodeOfConduct($this->denormalizer->denormalize($data['code_of_conduct'], \Github\Model\CommunityProfileFilesCodeOfConduct::class, 'json', $context));
            unset($data['code_of_conduct']);
        }
        elseif (\array_key_exists('code_of_conduct', $data) && $data['code_of_conduct'] === null) {
            $object->setCodeOfConduct(null);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($this->denormalizer->denormalize($data['license'], \Github\Model\CommunityProfileFilesLicense::class, 'json', $context));
            unset($data['license']);
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('contributing', $data) && $data['contributing'] !== null) {
            $object->setContributing($this->denormalizer->denormalize($data['contributing'], \Github\Model\CommunityProfileFilesContributing::class, 'json', $context));
            unset($data['contributing']);
        }
        elseif (\array_key_exists('contributing', $data) && $data['contributing'] === null) {
            $object->setContributing(null);
        }
        if (\array_key_exists('readme', $data) && $data['readme'] !== null) {
            $object->setReadme($this->denormalizer->denormalize($data['readme'], \Github\Model\CommunityProfileFilesReadme::class, 'json', $context));
            unset($data['readme']);
        }
        elseif (\array_key_exists('readme', $data) && $data['readme'] === null) {
            $object->setReadme(null);
        }
        if (\array_key_exists('issue_template', $data) && $data['issue_template'] !== null) {
            $object->setIssueTemplate($this->denormalizer->denormalize($data['issue_template'], \Github\Model\CommunityProfileFilesIssueTemplate::class, 'json', $context));
            unset($data['issue_template']);
        }
        elseif (\array_key_exists('issue_template', $data) && $data['issue_template'] === null) {
            $object->setIssueTemplate(null);
        }
        if (\array_key_exists('pull_request_template', $data) && $data['pull_request_template'] !== null) {
            $object->setPullRequestTemplate($this->denormalizer->denormalize($data['pull_request_template'], \Github\Model\CommunityProfileFilesPullRequestTemplate::class, 'json', $context));
            unset($data['pull_request_template']);
        }
        elseif (\array_key_exists('pull_request_template', $data) && $data['pull_request_template'] === null) {
            $object->setPullRequestTemplate(null);
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
        $dataArray['code_of_conduct'] = $this->normalizer->normalize($data->getCodeOfConduct(), 'json', $context);
        $dataArray['license'] = $this->normalizer->normalize($data->getLicense(), 'json', $context);
        $dataArray['contributing'] = $this->normalizer->normalize($data->getContributing(), 'json', $context);
        $dataArray['readme'] = $this->normalizer->normalize($data->getReadme(), 'json', $context);
        $dataArray['issue_template'] = $this->normalizer->normalize($data->getIssueTemplate(), 'json', $context);
        $dataArray['pull_request_template'] = $this->normalizer->normalize($data->getPullRequestTemplate(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CommunityProfileFilesConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CommunityProfileFiles::class => false];
    }
}