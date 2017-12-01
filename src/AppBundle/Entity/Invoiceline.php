<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoiceline
 *
 * @ORM\Table(name="InvoiceLine", indexes={@ORM\Index(name="IFK_InvoiceLineInvoiceId", columns={"InvoiceId"}), @ORM\Index(name="IFK_InvoiceLineTrackId", columns={"TrackId"})})
 * @ORM\Entity
 */
class Invoiceline
{
    /**
     * @var integer
     *
     * @ORM\Column(name="InvoiceLineId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $invoicelineid;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitPrice", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $unitprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \Invoice
     *
     * @ORM\ManyToOne(targetEntity="Invoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="InvoiceId", referencedColumnName="InvoiceId")
     * })
     */
    private $invoiceid;

    /**
     * @var \Track
     *
     * @ORM\ManyToOne(targetEntity="Track")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TrackId", referencedColumnName="TrackId")
     * })
     */
    private $trackid;

    /**
     * @return int
     */
    public function getInvoicelineid()
    {
        return $this->invoicelineid;
    }

    /**
     * @return string
     */
    public function getUnitprice()
    {
        return $this->unitprice;
    }

    /**
     * @param string $unitprice
     */
    public function setUnitprice($unitprice)
    {
        $this->unitprice = $unitprice;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return \Invoice
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }

    /**
     * @param \Invoice $invoiceid
     */
    public function setInvoiceid($invoiceid)
    {
        $this->invoiceid = $invoiceid;
    }

    /**
     * @return \Track
     */
    public function getTrackid()
    {
        return $this->trackid;
    }

    /**
     * @param \Track $trackid
     */
    public function setTrackid($trackid)
    {
        $this->trackid = $trackid;
    }

    function __toString()
    {
        return (string) $this->getInvoicelineid();
    }


}

