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
class OrgsOrgReposPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrgsOrgReposPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrgsOrgReposPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\OrgsOrgReposPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgReposPostBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('homepage', $data)) {
            $object->setHomepage($data['homepage']);
            unset($data['homepage']);
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
            unset($data['private']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        }
        if (\array_key_exists('has_issues', $data)) {
            $object->setHasIssues($data['has_issues']);
            unset($data['has_issues']);
        }
        if (\array_key_exists('has_projects', $data)) {
            $object->setHasProjects($data['has_projects']);
            unset($data['has_projects']);
        }
        if (\array_key_exists('has_wiki', $data)) {
            $object->setHasWiki($data['has_wiki']);
            unset($data['has_wiki']);
        }
        if (\array_key_exists('is_template', $data)) {
            $object->setIsTemplate($data['is_template']);
            unset($data['is_template']);
        }
        if (\array_key_exists('team_id', $data)) {
            $object->setTeamId($data['team_id']);
            unset($data['team_id']);
        }
        if (\array_key_exists('auto_init', $data)) {
            $object->setAutoInit($data['auto_init']);
            unset($data['auto_init']);
        }
        if (\array_key_exists('gitignore_template', $data)) {
            $object->setGitignoreTemplate($data['gitignore_template']);
            unset($data['gitignore_template']);
        }
        if (\array_key_exists('license_template', $data)) {
            $object->setLicenseTemplate($data['license_template']);
            unset($data['license_template']);
        }
        if (\array_key_exists('allow_squash_merge', $data)) {
            $object->setAllowSquashMerge($data['allow_squash_merge']);
            unset($data['allow_squash_merge']);
        }
        if (\array_key_exists('allow_merge_commit', $data)) {
            $object->setAllowMergeCommit($data['allow_merge_commit']);
            unset($data['allow_merge_commit']);
        }
        if (\array_key_exists('allow_rebase_merge', $data)) {
            $object->setAllowRebaseMerge($data['allow_rebase_merge']);
            unset($data['allow_rebase_merge']);
        }
        if (\array_key_exists('delete_branch_on_merge', $data)) {
            $object->setDeleteBranchOnMerge($data['delete_branch_on_merge']);
            unset($data['delete_branch_on_merge']);
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
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('homepage') && null !== $data->getHomepage()) {
            $dataArray['homepage'] = $data->getHomepage();
        }
        if ($data->isInitialized('private') && null !== $data->getPrivate()) {
            $dataArray['private'] = $data->getPrivate();
        }
        if ($data->isInitialized('visibility') && null !== $data->getVisibility()) {
            $dataArray['visibility'] = $data->getVisibility();
        }
        if ($data->isInitialized('hasIssues') && null !== $data->getHasIssues()) {
            $dataArray['has_issues'] = $data->getHasIssues();
        }
        if ($data->isInitialized('hasProjects') && null !== $data->getHasProjects()) {
            $dataArray['has_projects'] = $data->getHasProjects();
        }
        if ($data->isInitialized('hasWiki') && null !== $data->getHasWiki()) {
            $dataArray['has_wiki'] = $data->getHasWiki();
        }
        if ($data->isInitialized('isTemplate') && null !== $data->getIsTemplate()) {
            $dataArray['is_template'] = $data->getIsTemplate();
        }
        if ($data->isInitialized('teamId') && null !== $data->getTeamId()) {
            $dataArray['team_id'] = $data->getTeamId();
        }
        if ($data->isInitialized('autoInit') && null !== $data->getAutoInit()) {
            $dataArray['auto_init'] = $data->getAutoInit();
        }
        if ($data->isInitialized('gitignoreTemplate') && null !== $data->getGitignoreTemplate()) {
            $dataArray['gitignore_template'] = $data->getGitignoreTemplate();
        }
        if ($data->isInitialized('licenseTemplate') && null !== $data->getLicenseTemplate()) {
            $dataArray['license_template'] = $data->getLicenseTemplate();
        }
        if ($data->isInitialized('allowSquashMerge') && null !== $data->getAllowSquashMerge()) {
            $dataArray['allow_squash_merge'] = $data->getAllowSquashMerge();
        }
        if ($data->isInitialized('allowMergeCommit') && null !== $data->getAllowMergeCommit()) {
            $dataArray['allow_merge_commit'] = $data->getAllowMergeCommit();
        }
        if ($data->isInitialized('allowRebaseMerge') && null !== $data->getAllowRebaseMerge()) {
            $dataArray['allow_rebase_merge'] = $data->getAllowRebaseMerge();
        }
        if ($data->isInitialized('deleteBranchOnMerge') && null !== $data->getDeleteBranchOnMerge()) {
            $dataArray['delete_branch_on_merge'] = $data->getDeleteBranchOnMerge();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrgsOrgReposPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrgsOrgReposPostBody::class => false];
    }
}