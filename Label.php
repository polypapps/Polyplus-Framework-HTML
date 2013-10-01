<?php

namespace Common\Framework\Html;


/**
 * Description of Label
 *
 * The <label> tag defines a label for an <input> element.
 * 
 * The <label> element does not render as anything special for the user. However, it provides a usability improvement 
 * for mouse users, because if the user clicks on the text within the <label> element, it toggles the control.
 * 
 * @author rodrigo
 */
class Label extends VisibleElement{
        
    /**
     * Creates a Label and appends it to a Input Element
     * @param Document $document
     * @param FormField $field the field that the label will be appended to.
     * @param string $value the text of the label
     */
    public function __construct(Document $document, FormField $field, $value) {
        parent::__construct($document, "label");
        
        $this->setAttribute("for", $field->getId());
        
        $this->appendChild(new \DOMText($value));
        
    }
    
}

?>
