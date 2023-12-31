<?php

namespace Omnipay\Migs\Message;

use Omnipay\Tests\TestCase;

class ThreePartyCompletePurchaseRequestTest extends TestCase
{
    public function setUp()
    {
        $this->request = new ThreePartyCompletePurchaseRequest($this->getHttpClient(), $this->getHttpRequest());
    }

    public function testThreePartyCompletePurchaseSuccess()
    {
        $data = [];

        $data['vpc_Message']         = "Approved";
        $data['vpc_ReceiptNo']       = "12345";
        $data['vpc_TxnResponseCode'] = "0";
        $data['vpc_SecureHash']      = "8720B88CA00352B2A5F4D51C64E86BCB";

        $response = new Response($this->getMockRequest(), $data);

        $this->assertInstanceOf('Omnipay\Migs\Message\Response', $response);
        $this->assertTrue($response->isSuccessful());
        $this->assertFalse($response->isRedirect());
        $this->assertSame('12345', $response->getTransactionReference());
        $this->assertSame('Approved', $response->getMessage());
        $this->assertSame('0', $response->getCode());
    }

    public function testThreePartyCompletePurchaseFailure()
    {
        $data = [];

        $data['vpc_Message']         = "Error";
        $data['vpc_ReceiptNo']       = "12345";
        $data['vpc_TxnResponseCode'] = "1";
        $data['vpc_SecureHash']      = "8720B88CA00352B2A5F4D51C64E86BCB";

        $response = new Response($this->getMockRequest(), $data);

        $this->assertInstanceOf('Omnipay\Migs\Message\Response', $response);
        $this->assertFalse($response->isSuccessful());
        $this->assertFalse($response->isRedirect());
        $this->assertSame('12345', $response->getTransactionReference());
        $this->assertNotSame('Approved', $response->getMessage());
        $this->assertSame('1', $response->getCode());
    }
}
