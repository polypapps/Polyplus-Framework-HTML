<?php

namespace Common\Framework\Html;


/**
 * Description of TextField
 * 
 * <input type="text"> defines a one-line input field that a user can enter text into:
 * 
 * the default width of a text field is 20 characters.  
 *
 * @author rodrigo
 */
class TextField extends FormInput{
    
    /**
     * creates an text field.
     * @param Document $document
     * @param type $name
     */
    public function __construct(Document $document, $name) {
        parent::__construct($document, $name);
        $this->setAttribute("type", "text");
    }
    
}

?>
