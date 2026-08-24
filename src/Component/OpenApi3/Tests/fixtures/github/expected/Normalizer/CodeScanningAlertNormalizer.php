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
class CodeScanningAlertNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CodeScanningAlert::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CodeScanningAlert::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CodeScanningAlert();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('open', $data) && \is_int($data['open'])) {
            $data['open'] = (bool) $data['open'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CodeScanningAlertConstraint());
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
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('open', $data)) {
            $object->setOpen($data['open']);
            unset($data['open']);
        }
        if (\array_key_exists('closed_by', $data) && $data['closed_by'] !== null) {
            $object->setClosedBy($this->denormalizer->denormalize($data['closed_by'], \Github\Model\CodeScanningAlertClosedBy::class, 'json', $context));
            unset($data['closed_by']);
        }
        elseif (\array_key_exists('closed_by', $data) && $data['closed_by'] === null) {
            $object->setClosedBy(null);
        }
        if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['closed_at']));
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('number') && null !== $data->getNumber()) {
            $dataArray['number'] = $data->getNumber();
        }
        if ($data->isInitialized('ruleId') && null !== $data->getRuleId()) {
            $dataArray['rule_id'] = $data->getRuleId();
        }
        if ($data->isInitialized('ruleSeverity') && null !== $data->getRuleSeverity()) {
            $dataArray['rule_severity'] = $data->getRuleSeverity();
        }
        if ($data->isInitialized('ruleDescription') && null !== $data->getRuleDescription()) {
            $dataArray['rule_description'] = $data->getRuleDescription();
        }
        if ($data->isInitialized('tool') && null !== $data->getTool()) {
            $dataArray['tool'] = $data->getTool();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('open') && null !== $data->getOpen()) {
            $dataArray['open'] = $data->getOpen();
        }
        if ($data->isInitialized('closedBy') && null !== $data->getClosedBy()) {
            $dataArray['closed_by'] = $data->getClosedBy() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getClosedBy(), 'json', $context));
        }
        if ($data->isInitialized('closedAt') && null !== $data->getClosedAt()) {
            $dataArray['closed_at'] = $data->getClosedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('htmlUrl') && null !== $data->getHtmlUrl()) {
            $dataArray['html_url'] = $data->getHtmlUrl();
        }
        if ($data->isInitialized('closedReason') && null !== $data->getClosedReason()) {
            $dataArray['closed_reason'] = $data->getClosedReason();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CodeScanningAlertConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CodeScanningAlert::class => false];
    }
}