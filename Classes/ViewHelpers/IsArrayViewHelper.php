<?php

namespace Typoheads\Formhandler\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class IsArrayViewHelper extends AbstractViewHelper
{
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('value', 'mixed', 'the value to test for arrayness', true);
    }

    /**
     * @return bool
     */
    public function render()
    {
        return isset($this->arguments['value']) && is_array($this->arguments['value']);
    }
}
