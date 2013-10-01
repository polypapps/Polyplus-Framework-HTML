<?php

namespace Common\Framework\Html;


/**
 * Description of FormField
 * 
 * A generic form field.
 *
 * @author rodrigo
 */
class FormField extends VisibleElement{
    
    /**
     *
     * @var DOMAttr the name atribute of the Form Field 
     */
    protected $name;
    
    /**
     *
     * @var DOMAttr the value of the form field
     */
    protected $value;
        
    /**
     * 
     * @param Document $document
     * @param type $name the name of the field.
     * @param type $tagName the name of the tag. e.g "input"
     */
    public function __construct(Document $document, $name, $tagName) {
        parent::__construct($document, $tagName);
        $this->setName($name);
    }
    
    public function setName($name) {
        $this->name = $name;
        $this->setAttribute("name", $name);
    }
    
    public function setValue($value) {
        $this->value = $value;
        $this->setAttribute("value", $value);
    }
                
    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }


    
}

?>
