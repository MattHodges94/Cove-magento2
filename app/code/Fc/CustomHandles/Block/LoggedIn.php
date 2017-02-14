<?php
namespace Fc\CustomHandles\Block;

class LoggedIn extends \Magento\Framework\View\Element\Template
{
    protected $_coreHelper;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getLoggedInContent()
    {
        return '';
    }

}
