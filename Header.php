<?php

namespace Common\Framework\Html;


/**
 * Description of Header
 * 
 * The <h1> to <h6> tags are used to define HTML headings.
 * 
 * <h1> defines the most important heading. <h6> defines the least important heading.
 *
 * @author rodrigo
 */
class Header extends VisibleElement{
    
    /**
     * 
     * @param Document $document
     * @param int $level a number from 1 to 6.
     * @throws InvalidArgumentException if the $level is lower than 1 or greater than 6.
     */
    public function __construct(Document $document, $level = 1) {
        
        if(is_int($level) && $level <=6 && $level >=1) {
            parent::__construct($document, "h".$level);
        } else {
            throw new InvalidArgumentException("Header Elements suports level 1 to 6.");
        }
        
    }
    
}

?>
