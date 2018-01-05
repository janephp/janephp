<?php

namespace Jane\OpenApiRuntime\Tests\Client;

use Jane\OpenApiRuntime\Client\QueryParam;
use PHPUnit\Framework\TestCase;

class QueryParamTest extends TestCase
{
    public function testResolve()
    {
        $queryParam = new QueryParam();

        $queryParam->addQueryParameter('foo', false, [], 'foo_value');
        $queryParam->addQueryParameter('bar', false, [], 'bar_value');

        $queryParam->addFormParameter('foo_form', false, [], 'foo_form_value');
        $queryParam->addFormParameter('bar_form', false, [], 'bar_form_value');

        $queryParam->addHeaderParameter('foo_header', false, [], 'foo_header_value');
        $queryParam->addHeaderParameter('bar_header', false, [], 'bar_header_value');

        $newOptions = [
            'bar' => 'bar_replace',
            'bar_form' => 'bar_form_replace',
            'bar_header' => 'bar_header_replace',
        ];

        $this->assertEquals('foo=foo_value&bar=bar_value', $queryParam->buildQueryString());
        $this->assertEquals('foo=foo_value&bar=bar_replace', $queryParam->buildQueryString($newOptions));
        $this->assertEquals('foo_form=foo_form_value&bar_form=bar_form_value', $queryParam->buildFormDataString());
        $this->assertEquals('foo_form=foo_form_value&bar_form=bar_form_replace', $queryParam->buildFormDataString($newOptions));
        $this->assertEquals([
            'foo_header' => 'foo_header_value',
            'bar_header' => 'bar_header_value',
        ], $queryParam->buildHeaders());
        $this->assertEquals([
            'foo_header' => 'foo_header_value',
            'bar_header' => 'bar_header_replace',
        ], $queryParam->buildHeaders($newOptions));
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\MissingParametersException
     */
    public function testQueryRequired()
    {
        $queryParam = new QueryParam();
        $queryParam->addQueryParameter('foo', true);
        $queryParam->buildQueryString();
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\MissingParametersException
     */
    public function testFormRequired()
    {
        $queryParam = new QueryParam();
        $queryParam->addFormParameter('foo', true);
        $queryParam->buildFormDataString([]);
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\MissingParametersException
     */
    public function testHeaderRequired()
    {
        $queryParam = new QueryParam();
        $queryParam->addHeaderParameter('foo', true);
        $queryParam->buildHeaders([]);
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\UndefinedParametersException
     */
    public function testQueryUndefined()
    {
        $queryParam = new QueryParam();
        $queryParam->addQueryParameter('foo');
        $queryParam->buildQueryString(['bar' => 'yolo']);
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\UndefinedParametersException
     */
    public function testFormUndefined()
    {
        $queryParam = new QueryParam();
        $queryParam->addFormParameter('foo');
        $queryParam->buildFormDataString(['bar' => 'yolo']);
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\UndefinedParametersException
     */
    public function testHeaderUndefined()
    {
        $queryParam = new QueryParam();
        $queryParam->addHeaderParameter('foo');
        $queryParam->buildHeaders(['bar' => 'yolo']);
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\InvalidParametersException
     */
    public function testQueryInvalid()
    {
        $queryParam = new QueryParam();
        $queryParam->addQueryParameter('foo', 'foo_value', ['string']);
        $queryParam->buildQueryString(['foo' => 100]);
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\InvalidParametersException
     */
    public function testFormInvalid()
    {
        $queryParam = new QueryParam();
        $queryParam->addFormParameter('foo', 'foo_value', ['string']);
        $queryParam->buildFormDataString(['foo' => 100]);
    }

    /**
     * @expectedException \Jane\OpenApiRuntime\Client\Exception\InvalidParametersException
     */
    public function testHeaderInvalid()
    {
        $queryParam = new QueryParam();
        $queryParam->addHeaderParameter('foo', 'foo_value', ['string']);
        $queryParam->buildHeaders(['foo' => 100]);
    }
}
