<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class Order
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var OrderProductData
     */
    protected $productData;
    /**
     * @var OrderProduct
     */
    protected $product;
    /**
     * @return OrderProductData
     */
    public function getProductData(): OrderProductData
    {
        return $this->productData;
    }
    /**
     * @param OrderProductData $productData
     *
     * @return self
     */
    public function setProductData(OrderProductData $productData): self
    {
        $this->initialized['productData'] = true;
        $this->productData = $productData;
        return $this;
    }
    /**
     * @return OrderProduct
     */
    public function getProduct(): OrderProduct
    {
        return $this->product;
    }
    /**
     * @param OrderProduct $product
     *
     * @return self
     */
    public function setProduct(OrderProduct $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
}