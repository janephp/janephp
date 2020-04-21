<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('Jane\\OpenApi2\\Tests\\Expected\\Model\\ContactClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ContactClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Company' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\CompanyNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoicePaymentPaymentGateway' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoicePaymentPaymentGatewayNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceEstimate' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceEstimateNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceRetainer' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceRetainerNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceCreator' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceCreatorNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\InvoiceLineItemProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\InvoiceLineItemProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\EstimateCreator' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\EstimateCreatorNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseExpenseCategory' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseExpenseCategoryNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseUser' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseUserNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseReceipt' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseReceiptNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseInvoice' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ExpenseInvoiceNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryUser' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryUserNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryTask' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryTaskNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryExternalReference' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryExternalReferenceNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeEntryInvoice' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TimeEntryInvoiceNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UserAssignment' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\UserAssignmentNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UserAssignmentProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\UserAssignmentProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\UserAssignmentUser' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\UserAssignmentUserNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TaskAssignment' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TaskAssignmentNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TaskAssignmentProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TaskAssignmentProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TaskAssignmentTask' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\TaskAssignmentTaskNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignmentProject' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectAssignmentProjectNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignmentClient' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectAssignmentClientNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Projects' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ProjectsNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Error' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\ErrorNormalizer', 'Jane\\OpenApi2\\Tests\\Expected\\Model\\PaginationLinks' => 'Jane\\OpenApi2\\Tests\\Expected\\Normalizer\\PaginationLinksNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Jane\\JsonSchemaRuntime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}