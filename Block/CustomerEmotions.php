<?php

namespace My\Test\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * @api
 * @since 100.0.2
 */
class CustomerEmotions extends Template
{
    /**
     * @param Context $context
     * @param array $data
     * @param array $expirableSectionNames
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
}
