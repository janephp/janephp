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
class JobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\Job';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Job';
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
        $object = new \Github\Model\Job();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\JobConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('run_id', $data)) {
            $object->setRunId($data['run_id']);
            unset($data['run_id']);
        }
        if (\array_key_exists('run_url', $data)) {
            $object->setRunUrl($data['run_url']);
            unset($data['run_url']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('head_sha', $data)) {
            $object->setHeadSha($data['head_sha']);
            unset($data['head_sha']);
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
        }
        if (\array_key_exists('started_at', $data)) {
            $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['started_at']));
            unset($data['started_at']);
        }
        if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
            $object->setCompletedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['completed_at']));
            unset($data['completed_at']);
        }
        elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
            $object->setCompletedAt(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('steps', $data)) {
            $values = array();
            foreach ($data['steps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\JobStepsItem', 'json', $context);
            }
            $object->setSteps($values);
            unset($data['steps']);
        }
        if (\array_key_exists('check_run_url', $data)) {
            $object->setCheckRunUrl($data['check_run_url']);
            unset($data['check_run_url']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $data['id'] = $object->getId();
        $data['run_id'] = $object->getRunId();
        $data['run_url'] = $object->getRunUrl();
        $data['node_id'] = $object->getNodeId();
        $data['head_sha'] = $object->getHeadSha();
        $data['url'] = $object->getUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['status'] = $object->getStatus();
        $data['conclusion'] = $object->getConclusion();
        $data['started_at'] = $object->getStartedAt()->format('Y-m-d\\TH:i:sP');
        $data['completed_at'] = $object->getCompletedAt()->format('Y-m-d\\TH:i:sP');
        $data['name'] = $object->getName();
        if ($object->isInitialized('steps') && null !== $object->getSteps()) {
            $values = array();
            foreach ($object->getSteps() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['steps'] = $values;
        }
        $data['check_run_url'] = $object->getCheckRunUrl();
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\JobConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\Job' => false);
    }
}