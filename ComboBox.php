<?php

namespace Common\Framework\Html;


/**
 * Description of ComboBox
 * 
 * The <select> element is used to create a drop-down list.
 *
 * @author rodrigo
 */
class ComboBox extends FormField implements SelectableGroup{
    
    /**
     * Creates an ComboBox
     * @param Document $document
     * @param type $name
     * @param type $multiple
     */
    public function __construct(Document $document, $name, $multiple = false) {
        parent::__construct($document, $name, "select");
        if($multiple) {
            $this->setAttribute("multiple", "multiple");
        }
    }
    
    /**
     * Adds an option to the select.
     * @param Option $option the Option to be added
     * @param boolean $selected set true if you want this option to be selected by default.
     */
    public function addOption(Option $option, $selected = false) {
        
        $opt = new FormField($this->document, $this->name,"option");
        $opt->setValue($option->getValue());
        
        if($selected)
            $opt->setAttribute ("selected", "selected");
        
        $this->appendChild($opt);
        $opt->appendChild(new \DOMText($option->getLabel()));
        
    }
}

?>
