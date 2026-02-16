<?php

namespace Jane\Component\OpenApi2\Tests;

require_once __DIR__ . '/../../../../vendor/autoload.php';


use Jane\Component\OpenApi2\Tests\Fixtures\AllOfSchemaWithOneOfProperty\Normalizer\JaneObjectNormalizer;
use Jane\Component\OpenApiCommon\Console\Command\GenerateCommand;
use Jane\Component\OpenApiCommon\Console\Loader\ConfigLoader;
use Jane\Component\OpenApiCommon\Console\Loader\OpenApiMatcher;
use Jane\Component\OpenApiCommon\Console\Loader\SchemaLoader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class ReproductionTest extends TestCase
{
    /*
     * Removed testDenormalization as it relied on schemas removed during minimization.
     * The core reproduction test is testAllOfPropertyWithOneOfSerialization.
     */

    public function testAllOfPropertyWithOneOfSerialization()
    {
        // 1. Instantiate Normalizer
        $normalizers = [
            new JaneObjectNormalizer(),
        ];
        $serializer = new Serializer($normalizers, [new JsonEncoder(null, new JsonDecode(['json_decode_associative' => true]))]);

        // 2. Create Object
        $filter = new \Jane\Component\OpenApi2\Tests\Fixtures\AllOfSchemaWithOneOfProperty\Model\SalesRetrieveInvoicesRequestFilter();
        $link = new \Jane\Component\OpenApi2\Tests\Fixtures\AllOfSchemaWithOneOfProperty\Model\LinkInvoiceLink();
        $link->setInvoiceId('uuid-123');
        $link->setDiscriminator('Link_InvoiceLink');

        $filter->setLinks([$link]);

        $request = new \Jane\Component\OpenApi2\Tests\Fixtures\AllOfSchemaWithOneOfProperty\Model\SalesRetrieveInvoicesRequest();
        $request->setDiscriminator('Sales_RetrieveInvoicesRequest'); // Assuming discriminator is required
        $request->setFilter($filter); // Singular based on schema definition

        // 3. Normalize
        $normalized = $serializer->normalize($request, 'json');

        // 4. Assert
        $this->assertArrayHasKey('filter', $normalized);
        $this->assertArrayHasKey('links', $normalized['filter']);
        $this->assertIsArray($normalized['filter']['links']);
        $this->assertCount(1, $normalized['filter']['links']);

        // Check links[0]
        $links0 = $normalized['filter']['links'][0];
        $this->assertIsArray($links0, 'Link item should be an array (normalized), but got ' . gettype($links0));
        $this->assertEquals('Link_InvoiceLink', $links0['discriminator']);
        $this->assertEquals('uuid-123', $links0['invoiceId']);
    }
}
