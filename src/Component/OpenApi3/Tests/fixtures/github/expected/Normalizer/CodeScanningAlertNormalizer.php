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
class CodeScanningAlertNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\CodeScanningAlert';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CodeScanningAlertConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
            unset($data['number']);
        }
        if (\array_key_exists('rule_id', $data)) {
            $object->setRuleId($data['rule_id']);
            unset($data['rule_id']);
        }
        if (\array_key_exists('rule_severity', $data)) {
            $object->setRuleSeverity($data['rule_severity']);
            unset($data['rule_severity']);
        }
        if (\array_key_exists('rule_description', $data)) {
            $object->setRuleDescription($data['rule_description']);
            unset($data['rule_description']);
        }
        if (\array_key_exists('tool', $data) && $data['tool'] !== null) {
            $object->setTool($data['tool']);
            unset($data['tool']);
        }
        elseif (\array_key_exists('tool', $data) && $data['tool'] === null) {
            $object->setTool(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('open', $data)) {
            $object->setOpen($data['open']);
            unset($data['open']);
        }
        if (\array_key_exists('closed_by', $data) && $data['closed_by'] !== null) {
            $object->setClosedBy($this->denormalizer->denormalize($data['closed_by'], 'Github\\Model\\CodeScanningAlertClosedBy', 'json', $context));
            unset($data['closed_by']);
        }
        elseif (\array_key_exists('closed_by', $data) && $data['closed_by'] === null) {
            $object->setClosedBy(null);
        }
        if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
            unset($data['closed_at']);
        }
        elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
            $object->setClosedAt(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('closed_reason', $data) && $data['closed_reason'] !== null) {
            $object->setClosedReason($data['closed_reason']);
            unset($data['closed_reason']);
        }
        elseif (\array_key_exists('closed_reason', $data) && $data['closed_reason'] === null) {
            $object->setClosedReason(null);
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
        if ($object->isInitialized('number') && null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if ($object->isInitialized('ruleId') && null !== $object->getRuleId()) {
            $data['rule_id'] = $object->getRuleId();
        }
        if ($object->isInitialized('ruleSeverity') && null !== $object->getRuleSeverity()) {
            $data['rule_severity'] = $object->getRuleSeverity();
        }
        if ($object->isInitialized('ruleDescription') && null !== $object->getRuleDescription()) {
            $data['rule_description'] = $object->getRuleDescription();
        }
        if ($object->isInitialized('tool') && null !== $object->getTool()) {
            $data['tool'] = $object->getTool();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('open') && null !== $object->getOpen()) {
            $data['open'] = $object->getOpen();
        }
        if ($object->isInitialized('closedBy') && null !== $object->getClosedBy()) {
            $data['closed_by'] = $object->getClosedBy() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getClosedBy(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('closedAt') && null !== $object->getClosedAt()) {
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if ($object->isInitialized('closedReason') && null !== $object->getClosedReason()) {
            $data['closed_reason'] = $object->getClosedReason();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CodeScanningAlertConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\CodeScanningAlert' => false);
    }
}