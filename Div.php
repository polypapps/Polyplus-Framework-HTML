<?php

namespace Common\Framework\Html;


/**
 * Description of Div
 *
 * The <div> tag defines a division or a section in an HTML document.
 *
 * The <div> tag is used to group block-elements to format them with CSS.
 * 
 * @author rodrigo
 */
class Div extends VisibleElement{
    
    /**
     * Creates a new Div Element
     * @param Document $document
     * @param string $id
     */
    public function __construct(Document $document, $id = null) {
        
        parent::__construct($document, "div");
        if($id)
            $this->setId($id);
    }
    
    
    
}

?>
