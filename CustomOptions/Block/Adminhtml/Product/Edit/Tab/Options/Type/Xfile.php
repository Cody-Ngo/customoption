<?php
namespace A\Custoptiontype\Block\Adminhtml\Product\Edit\Tab\Options\Type;

class Xfile extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Type\AbstractType
{
    /**
     * @var string
     */
    protected $_template = 'A_Custoptiontype::catalog/product/edit/options/type/xfile.phtml';


    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\Config\Source\Product\Options\Price $optionPrice,
        array $data = []
    ) {
        $this->_optionPrice = $optionPrice;
        parent::__construct($context, $optionPrice, $data);
    }

}