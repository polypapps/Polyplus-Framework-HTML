<?php

namespace Common\Framework\Html;


/**
 * Description of FormFieldSet
 *
 * The <fieldset> tag is used to group related elements in a form.
 * 
 * The <fieldset> tag draws a box around the related elements.
 * 
 * @author rodrigo
 */
class FormFieldSet extends FormField{
    
    /**
     *
     * @var string the legend of the fieldset
     */
    protected $legend;

    /**
     * Creates a fieldset
     * @param \Document $document
     * @param string $name the name of the fieldset
     */
    public function __construct(Document $document, $name) {
        parent::__construct($document, $name, "fieldset");
    }
    
    public function getLegend() {
        return $this->legend;
    }

    public function setLegend($legend) {
        $this->legend = new Element($this->document, "legend");
        $this->appendChild($this->legend);
        $this->legend->appendChild(new Label($this->document, $this, $legend));
    }


    
}

?>
