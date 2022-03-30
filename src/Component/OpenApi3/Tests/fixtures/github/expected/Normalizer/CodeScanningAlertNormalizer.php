<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CodeScanningAlertNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\CodeScanningAlert';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CodeScanningAlert';
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
        $object = new \Github\Model\CodeScanningAlert();
        $validator = new \Github\Validator\CodeScanningAlertValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('rule_id', $data)) {
            $object->setRuleId($data['rule_id']);
        }
        if (\array_key_exists('rule_severity', $data)) {
            $object->setRuleSeverity($data['rule_severity']);
        }
        if (\array_key_exists('rule_description', $data)) {
            $object->setRuleDescription($data['rule_description']);
        }
        if (\array_key_exists('tool', $data) && $data['tool'] !== null) {
            $object->setTool($data['tool']);
        }
        elseif (\array_key_exists('tool', $data) && $data['tool'] === null) {
            $object->setTool(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('open', $data)) {
            $object->setOpen($data['open']);
        }
        if (\array_key_exists('closed_by', $data) && $data['closed_by'] !== null) {
            $object->setClosedBy($this->denormalizer->denormalize($data['closed_by'], 'Github\\Model\\CodeScanningAlertClosedBy', 'json', $context));
        }
        elseif (\array_key_exists('closed_by', $data) && $data['closed_by'] === null) {
            $object->setClosedBy(null);
        }
        if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
        }
        elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
            $object->setClosedAt(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('closed_reason', $data) && $data['closed_reason'] !== null) {
            $object->setClosedReason($data['closed_reason']);
        }
        elseif (\array_key_exists('closed_reason', $data) && $data['closed_reason'] === null) {
            $object->setClosedReason(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getRuleId()) {
            $data['rule_id'] = $object->getRuleId();
        }
        if (null !== $object->getRuleSeverity()) {
            $data['rule_severity'] = $object->getRuleSeverity();
        }
        if (null !== $object->getRuleDescription()) {
            $data['rule_description'] = $object->getRuleDescription();
        }
        if (null !== $object->getTool()) {
            $data['tool'] = $object->getTool();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getOpen()) {
            $data['open'] = $object->getOpen();
        }
        if (null !== $object->getClosedBy()) {
            $data['closed_by'] = $this->normalizer->normalize($object->getClosedBy(), 'json', $context);
        }
        if (null !== $object->getClosedAt()) {
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getClosedReason()) {
            $data['closed_reason'] = $object->getClosedReason();
        }
        $validator = new \Github\Validator\CodeScanningAlertValidator();
        $validator->validate($data);
        return $data;
    }
}