<?php

namespace Common\Framework\Html;


/**
 * Description of VisibleElement
 *
 * Element that will be visible on the screen.
 * These element will be automatically appended to the body.
 * If you append it to another Element it will be removed from the body.
 * 
 * @author rodrigo
 */
class VisibleElement extends Element{
    
    /**
     * Creates an Visible Element.
     * @param Document $document
     * @param type $name
     */
    public function __construct(Document $document, $name) {
        parent::__construct($document, $name);
        $this->document->appendToBody($this);
        $elementName = end(explode("\\", get_class($this)));
        $this->setId($elementName.$this->document->autoIncrementId($elementName));
    }
    
}

?>
