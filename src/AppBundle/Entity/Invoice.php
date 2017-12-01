<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table(name="Invoice", indexes={@ORM\Index(name="IFK_InvoiceCustomerId", columns={"CustomerId"})})
 * @ORM\Entity
 */
class Invoice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="InvoiceId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invoiceid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="InvoiceDate", type="datetime", nullable=false)
     */
    private $invoicedate;

    /**
     * @var string
     *
     * @ORM\Column(name="BillingAddress", type="string", length=70, nullable=true)
     */
    private $billingaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="BillingCity", type="string", length=40, nullable=true)
     */
    private $billingcity;

    /**
     * @var string
     *
     * @ORM\Column(name="BillingState", type="string", length=40, nullable=true)
     */
    private $billingstate;

    /**
     * @var string
     *
     * @ORM\Column(name="BillingCountry", type="string", length=40, nullable=true)
     */
    private $billingcountry;

    /**
     * @var string
     *
     * @ORM\Column(name="BillingPostalCode", type="string", length=10, nullable=true)
     */
    private $billingpostalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="Total", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $total;

    /**
     * @var \Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerId", referencedColumnName="CustomerId")
     * })
     */
    private $customerid;

    /**
     * @return int
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }

    /**
     * @return \DateTime
     */
    public function getInvoicedate()
    {
        return $this->invoicedate;
    }

    /**
     * @param \DateTime $invoicedate
     */
    public function setInvoicedate($invoicedate)
    {
        $this->invoicedate = $invoicedate;
    }

    /**
     * @return string
     */
    public function getBillingaddress()
    {
        return $this->billingaddress;
    }

    /**
     * @param string $billingaddress
     */
    public function setBillingaddress($billingaddress)
    {
        $this->billingaddress = $billingaddress;
    }

    /**
     * @return string
     */
    public function getBillingcity()
    {
        return $this->billingcity;
    }

    /**
     * @param string $billingcity
     */
    public function setBillingcity($billingcity)
    {
        $this->billingcity = $billingcity;
    }

    /**
     * @return string
     */
    public function getBillingstate()
    {
        return $this->billingstate;
    }

    /**
     * @param string $billingstate
     */
    public function setBillingstate($billingstate)
    {
        $this->billingstate = $billingstate;
    }

    /**
     * @return string
     */
    public function getBillingcountry()
    {
        return $this->billingcountry;
    }

    /**
     * @param string $billingcountry
     */
    public function setBillingcountry($billingcountry)
    {
        $this->billingcountry = $billingcountry;
    }

    /**
     * @return string
     */
    public function getBillingpostalcode()
    {
        return $this->billingpostalcode;
    }

    /**
     * @param string $billingpostalcode
     */
    public function setBillingpostalcode($billingpostalcode)
    {
        $this->billingpostalcode = $billingpostalcode;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return \Customer
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * @param \Customer $customerid
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;
    }

    function __toString()
    {
        return '#'.(int) $this->getInvoiceid().'-'.$this->getInvoicedate()->format('Y-m-d--h-i-s');
    }


}

