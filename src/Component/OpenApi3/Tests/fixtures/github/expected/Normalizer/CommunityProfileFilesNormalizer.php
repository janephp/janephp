<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\CommunityProfileFiles';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CommunityProfileFiles';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CommunityProfileFiles();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CommunityProfileFilesConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('code_of_conduct', $data) && $data['code_of_conduct'] !== null) {
            $object->setCodeOfConduct($this->denormalizer->denormalize($data['code_of_conduct'], 'Github\\Model\\CommunityProfileFilesCodeOfConduct', 'json', $context));
            unset($data['code_of_conduct']);
        }
        elseif (\array_key_exists('code_of_conduct', $data) && $data['code_of_conduct'] === null) {
            $object->setCodeOfConduct(null);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($this->denormalizer->denormalize($data['license'], 'Github\\Model\\CommunityProfileFilesLicense', 'json', $context));
            unset($data['license']);
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('contributing', $data) && $data['contributing'] !== null) {
            $object->setContributing($this->denormalizer->denormalize($data['contributing'], 'Github\\Model\\CommunityProfileFilesContributing', 'json', $context));
            unset($data['contributing']);
        }
        elseif (\array_key_exists('contributing', $data) && $data['contributing'] === null) {
            $object->setContributing(null);
        }
        if (\array_key_exists('readme', $data) && $data['readme'] !== null) {
            $object->setReadme($this->denormalizer->denormalize($data['readme'], 'Github\\Model\\CommunityProfileFilesReadme', 'json', $context));
            unset($data['readme']);
        }
        elseif (\array_key_exists('readme', $data) && $data['readme'] === null) {
            $object->setReadme(null);
        }
        if (\array_key_exists('issue_template', $data) && $data['issue_template'] !== null) {
            $object->setIssueTemplate($this->denormalizer->denormalize($data['issue_template'], 'Github\\Model\\CommunityProfileFilesIssueTemplate', 'json', $context));
            unset($data['issue_template']);
        }
        elseif (\array_key_exists('issue_template', $data) && $data['issue_template'] === null) {
            $object->setIssueTemplate(null);
        }
        if (\array_key_exists('pull_request_template', $data) && $data['pull_request_template'] !== null) {
            $object->setPullRequestTemplate($this->denormalizer->denormalize($data['pull_request_template'], 'Github\\Model\\CommunityProfileFilesPullRequestTemplate', 'json', $context));
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['code_of_conduct'] = $object->getCodeOfConduct() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getCodeOfConduct(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['license'] = $object->getLicense() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getLicense(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['contributing'] = $object->getContributing() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getContributing(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['readme'] = $object->getReadme() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getReadme(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['issue_template'] = $object->getIssueTemplate() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getIssueTemplate(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        $data['pull_request_template'] = $object->getPullRequestTemplate() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getPullRequestTemplate(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CommunityProfileFilesConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\CommunityProfileFiles' => false);
    }
}