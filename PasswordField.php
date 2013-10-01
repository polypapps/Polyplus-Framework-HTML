<?php

namespace Common\Framework\Html;


/**
 * Description of PasswordField
 *
 * <input type="password"> defines a password field: 
 * 
 * The characters in a password field are masked (shown as asterisks or circles).  
 * 
 * @author rodrigo
 */
class PasswordField extends FormInput{
    
    /**
     * create a password field.
     * @param Document $document
     * @param type $name
     */
    public function __construct(Document $document, $name) {
        parent::__construct($document, $name);
        $this->setAttribute("type", "password");
    }
    
}

?>
