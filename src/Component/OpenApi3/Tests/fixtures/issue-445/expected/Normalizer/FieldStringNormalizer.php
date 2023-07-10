<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FieldStringNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\FieldString';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FieldString';
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
        $object = new \PicturePark\API\Model\FieldString();
        if (\array_key_exists('boost', $data) && \is_int($data['boost'])) {
            $data['boost'] = (double) $data['boost'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('indexId', $data) && $data['indexId'] !== null) {
            $object->setIndexId($data['indexId']);
            unset($data['indexId']);
        }
        elseif (\array_key_exists('indexId', $data) && $data['indexId'] === null) {
            $object->setIndexId(null);
        }
        if (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] !== null) {
            $object->setFieldNamespace($data['fieldNamespace']);
            unset($data['fieldNamespace']);
        }
        elseif (\array_key_exists('fieldNamespace', $data) && $data['fieldNamespace'] === null) {
            $object->setFieldNamespace(null);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
            unset($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $object->setDescriptions($data['descriptions']);
            unset($data['descriptions']);
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->setDescriptions(null);
        }
        if (\array_key_exists('required', $data)) {
            $object->setRequired($data['required']);
            unset($data['required']);
        }
        if (\array_key_exists('fixed', $data)) {
            $object->setFixed($data['fixed']);
            unset($data['fixed']);
        }
        if (\array_key_exists('index', $data)) {
            $object->setIndex($data['index']);
            unset($data['index']);
        }
        if (\array_key_exists('simpleSearch', $data)) {
            $object->setSimpleSearch($data['simpleSearch']);
            unset($data['simpleSearch']);
        }
        if (\array_key_exists('sortable', $data)) {
            $object->setSortable($data['sortable']);
            unset($data['sortable']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->setTemplate($data['template']);
            unset($data['template']);
        }
        elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->setTemplate(null);
        }
        if (\array_key_exists('pattern', $data) && $data['pattern'] !== null) {
            $object->setPattern($data['pattern']);
            unset($data['pattern']);
        }
        elseif (\array_key_exists('pattern', $data) && $data['pattern'] === null) {
            $object->setPattern(null);
        }
        if (\array_key_exists('minimumLength', $data) && $data['minimumLength'] !== null) {
            $object->setMinimumLength($data['minimumLength']);
            unset($data['minimumLength']);
        }
        elseif (\array_key_exists('minimumLength', $data) && $data['minimumLength'] === null) {
            $object->setMinimumLength(null);
        }
        if (\array_key_exists('maximumLength', $data) && $data['maximumLength'] !== null) {
            $object->setMaximumLength($data['maximumLength']);
            unset($data['maximumLength']);
        }
        elseif (\array_key_exists('maximumLength', $data) && $data['maximumLength'] === null) {
            $object->setMaximumLength(null);
        }
        if (\array_key_exists('indexAnalyzers', $data) && $data['indexAnalyzers'] !== null) {
            $values = array();
            foreach ($data['indexAnalyzers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\AnalyzerBase', 'json', $context);
            }
            $object->setIndexAnalyzers($values);
            unset($data['indexAnalyzers']);
        }
        elseif (\array_key_exists('indexAnalyzers', $data) && $data['indexAnalyzers'] === null) {
            $object->setIndexAnalyzers(null);
        }
        if (\array_key_exists('simpleSearchAnalyzers', $data) && $data['simpleSearchAnalyzers'] !== null) {
            $values_1 = array();
            foreach ($data['simpleSearchAnalyzers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\AnalyzerBase', 'json', $context);
            }
            $object->setSimpleSearchAnalyzers($values_1);
            unset($data['simpleSearchAnalyzers']);
        }
        elseif (\array_key_exists('simpleSearchAnalyzers', $data) && $data['simpleSearchAnalyzers'] === null) {
            $object->setSimpleSearchAnalyzers(null);
        }
        if (\array_key_exists('multiLine', $data)) {
            $object->setMultiLine($data['multiLine']);
            unset($data['multiLine']);
        }
        if (\array_key_exists('grantedValues', $data) && $data['grantedValues'] !== null) {
            $values_2 = array();
            foreach ($data['grantedValues'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setGrantedValues($values_2);
            unset($data['grantedValues']);
        }
        elseif (\array_key_exists('grantedValues', $data) && $data['grantedValues'] === null) {
            $object->setGrantedValues(null);
        }
        if (\array_key_exists('boost', $data)) {
            $object->setBoost($data['boost']);
            unset($data['boost']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('indexId') && null !== $object->getIndexId()) {
            $data['indexId'] = $object->getIndexId();
        }
        if ($object->isInitialized('fieldNamespace') && null !== $object->getFieldNamespace()) {
            $data['fieldNamespace'] = $object->getFieldNamespace();
        }
        if ($object->isInitialized('names') && null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if ($object->isInitialized('descriptions') && null !== $object->getDescriptions()) {
            $data['descriptions'] = $object->getDescriptions();
        }
        $data['required'] = $object->getRequired();
        $data['fixed'] = $object->getFixed();
        $data['index'] = $object->getIndex();
        $data['simpleSearch'] = $object->getSimpleSearch();
        $data['sortable'] = $object->getSortable();
        $data['kind'] = $object->getKind();
        if ($object->isInitialized('template') && null !== $object->getTemplate()) {
            $data['template'] = $object->getTemplate();
        }
        if ($object->isInitialized('pattern') && null !== $object->getPattern()) {
            $data['pattern'] = $object->getPattern();
        }
        if ($object->isInitialized('minimumLength') && null !== $object->getMinimumLength()) {
            $data['minimumLength'] = $object->getMinimumLength();
        }
        if ($object->isInitialized('maximumLength') && null !== $object->getMaximumLength()) {
            $data['maximumLength'] = $object->getMaximumLength();
        }
        if ($object->isInitialized('indexAnalyzers') && null !== $object->getIndexAnalyzers()) {
            $values = array();
            foreach ($object->getIndexAnalyzers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['indexAnalyzers'] = $values;
        }
        if ($object->isInitialized('simpleSearchAnalyzers') && null !== $object->getSimpleSearchAnalyzers()) {
            $values_1 = array();
            foreach ($object->getSimpleSearchAnalyzers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['simpleSearchAnalyzers'] = $values_1;
        }
        if ($object->isInitialized('multiLine') && null !== $object->getMultiLine()) {
            $data['multiLine'] = $object->getMultiLine();
        }
        if ($object->isInitialized('grantedValues') && null !== $object->getGrantedValues()) {
            $values_2 = array();
            foreach ($object->getGrantedValues() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['grantedValues'] = $values_2;
        }
        if ($object->isInitialized('boost') && null !== $object->getBoost()) {
            $data['boost'] = $object->getBoost();
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\FieldString' => false);
    }
}