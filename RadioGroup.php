<?php

namespace Common\Framework\Html;



/**
 * Description of RadioGroup
 * 
 * a group of radio inputs.
 *
 * @author rodrigo
 */
class RadioGroup extends FormFieldSet implements SelectableGroup{
    
    /**
     *
     * @var FormInput[] Contains the options added.
     */
    private $options = array();

    /**
     * Add an option to the group.
     * @param Option $option the option to be added
     * @param type $selected if true, the option added will be selected by default
     */
    public function addOption(Option $option, $selected = false) {
        $newOption = new FormInput($this->document, $this->getName());
        $newOption->setType("radio");
        $newOption->setValue($option->getValue());
        
        if($selected)
            $newOption->setAttribute ("checked", "checked");
        
        $this->options[$option->getValue()] = $newOption;
        $this->appendChild(new Label($this->document, $newOption, $option->getLabel()));
        $this->appendChild($newOption);
    }
}

?>
