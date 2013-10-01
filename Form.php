<?php

namespace Common\Framework\Html;


/**
 * Description of Form
 * 
 * HTML forms are used to pass data to a server.
 * 
 * An HTML form can contain input elements like text fields, checkboxes, radio-buttons, submit buttons and more. 
 * A form can also contain select lists, textarea, fieldset, legend, and label elements.
 *
 * @author rodrigo
 */
class Form extends VisibleElement{
    
    /**
     * const The correct post string to be setted on the method atribute
     */
    const POST_METHOD = "post";
    
    /**
     * const The correct get string to be setted on the method atribute
     */
    const GET_METHOD = "get";
    
    /**
     *
     * @var DOMAttr the page to where the data of the form will be sent. 
     */
    private $action;
    
    /**
     *
     * @var DOMAttr the sending method of the data
     */
    private $method;
    
    /**
     *
     * @var DOMAttr Name atribute of the form 
     */
    private $name;
    
    private $toIframe;
    
    private $iframe;
    
    /**
     * 
     * @param type $document
     * @param string $action the destination of the form data.
     * @param string $method the method of sending. it can be get or set.
     */
    public function __construct($document, $action, $method = Form::POST_METHOD, $toIframe = false) {
        parent::__construct($document, "form");
        
        $this->setAttribute("enctype", "multipart/form-data");
        
        $this->setAction($action);
        $this->setMethod ($method);
        
        if($toIframe) {
            
            $this->iframe = new VisibleElement($this->document, "iframe");
            if(method_exists($this->document, "appendToContent"));
                $this->document->appendToContent($this->iframe);
            $this->toIframe = true;
            $this->setId($this->getId());
            
        }
        
    }
    
    /**
     * set the destination of the form data.
     * @param string $action
     */
    public function setAction($action) {
        if (!$this->action) {
            $this->action = $this->setAttribute("action", $action);
        } else {
            $this->action->value = $action;
        }
    }

    /**
     * the method of sending. it can be get or set.
     * @param string $method
     */
    public function setMethod($method) {
        if(!$this->method) {
            $this->method = $this->setAttribute("method", $method);
        } else {
            $this->method->value = $method;
        }
    }

    /**
     * sets the name of the form
     * @param string $name
     */
    public function setName($name) {
        if(!$this->name) {
            $this->name = $this->setAttribute("name", $name);
        } else {
            $this->name->value = $name;
        }
    }
    
    public function setId($id) {
        parent::setId($id);
        if($this->toIframe) {
            $iframeId = "targetOf".$this->getId();
            
            $this->setAttribute("target", $iframeId);
            
            $this->iframe->setAttribute("name", $iframeId);
            $this->iframe->setId($iframeId);
        }
    }


    
}

?>
