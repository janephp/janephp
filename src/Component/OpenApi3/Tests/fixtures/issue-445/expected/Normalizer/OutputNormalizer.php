<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\Output';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Output';
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
        $object = new \PicturePark\API\Model\Output();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('outputFormatId', $data)) {
            $object->setOutputFormatId($data['outputFormatId']);
        }
        if (\array_key_exists('contentId', $data)) {
            $object->setContentId($data['contentId']);
        }
        if (\array_key_exists('renderingState', $data)) {
            $object->setRenderingState($data['renderingState']);
        }
        if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
            $object->setDetail($data['detail']);
        }
        elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
            $object->setDetail(null);
        }
        if (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] !== null) {
            $object->setBackupTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['backupTimestamp']));
        }
        elseif (\array_key_exists('backupTimestamp', $data) && $data['backupTimestamp'] === null) {
            $object->setBackupTimestamp(null);
        }
        if (\array_key_exists('attemptsLeft', $data)) {
            $object->setAttemptsLeft($data['attemptsLeft']);
        }
        if (\array_key_exists('fileVersion', $data)) {
            $object->setFileVersion($data['fileVersion']);
        }
        if (\array_key_exists('dynamicRendering', $data)) {
            $object->setDynamicRendering($data['dynamicRendering']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['outputFormatId'] = $object->getOutputFormatId();
        $data['contentId'] = $object->getContentId();
        $data['renderingState'] = $object->getRenderingState();
        if (null !== $object->getDetail()) {
            $data['detail'] = $object->getDetail();
        }
        if (null !== $object->getBackupTimestamp()) {
            $data['backupTimestamp'] = $object->getBackupTimestamp()->format('Y-m-d\\TH:i:sP');
        }
        $data['attemptsLeft'] = $object->getAttemptsLeft();
        $data['fileVersion'] = $object->getFileVersion();
        $data['dynamicRendering'] = $object->getDynamicRendering();
        $data['kind'] = $object->getKind();
        return $data;
    }
}