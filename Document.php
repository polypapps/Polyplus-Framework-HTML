<?php

namespace Common\Framework\Html;


/**
 * Description of Document
 * 
 * Main Document on the DOM Tree. Required for all the API.
 *
 * @author rodrigo
 */
abstract class Document Extends \DOMDocument{
    
    /**
     *
     * @var boolean print or not the html
     */
    private $visible = false;
    
    /**
     * Root Element of the document
     * @var DOMNode 
     */
    private $html;
    
    /**
     * The Head Element of the document
     * @var Head 
     */
    protected $head;
    
    /**
     * The Body Element of the document
     * @var type DOMNode
     */
    protected $body;
    
    /**
     * Used to help the auto incremental id function.
     * @var array Next available id on the document 
     */
    private $elementsArray;


    /**
     * 
     * Initialize the document helper.
     * 
     * @param String $title The title of the page.
     */
    public function __construct($title = "", $charset = "UTF-8") {
        
        parent::__construct("1.0",$charset);
        $this->formatOutput = true;
        
        $domImp = new \DOMImplementation();
        $docType = $domImp->createDocumentType("html");
        $doc = $domImp->createDocument(NULL, NULL, $docType);
        
        parent::loadHTML($doc->saveHTML());
                
        $this->html = $this->createElement('html');
        $this->html = parent::appendChild($this->html);;
        
        
        $this->head = new Head($this);
        $this->head->setTitle($title);
        $this->head->setCharset($charset);
        
        $this->body = $this->createElement('body');
        $this->appendChild($this->body);
        
        $this->initComponents();
    }
    
    
    /**
     * Build the html structure.
     */
    protected abstract function initComponents();
    
    /**
     * Adds a new child at the end of the HTML root element
     * @param DOMNode $newnode
     * @return \DOMNode The same node passed as param
     */
    public function appendChild(\DOMNode $newnode) {
        $this->html->appendChild($newnode);
        return $newnode;
    }
    
    /**
     * Adds a node to the body element
     * @param DOMNode $newNode
     * @return \DOMNode The same node passed as param
     */
    public function appendToBody(\DOMNode $newNode) {
        $this->body->appendChild($newNode);
        return $newNode;
    }
    
    public function insertBeforeOnBody(\DOMNode $newnode, \DOMNode $refnode = null) {
        $this->body->insertBefore($newnode, $refnode);
    }
    
    /**
     * Adds a meta to the head section.
     * @param string $name
     * @param string $content
     */
    public function addMetaTag($name, $content) {
        
        $this->head->addMetaTag($name, $content);
    }
    
    /**
     * Add a Stylesheet to the head section
     * @param String $path path to the stylesheet file, relative to the server's document root (whith starting '/')
     */
    public function addStyleSheet($path, $theme=NULL) {
        
        $this->head->addStyleSheet($path, $theme);
    }
    
    /**
     * Add a javascript script to the head section
     * @param String,boolean $path path to the javascript file, relative to the server's document root (whith starting '/')
     * 
     */
    public function addJavaScript($path) {
        
        $this->head->addJavaScript($path);
    }
    
    /**
     * Add a javascript plain code Tag to the head section
     * @param String $code javascript code to be added
     */
    public function addJavascriptCode($code) {
        
        $this->head->addJavascriptCode($code);
        
    }
    
    /**
     * 
     * @return int the next available id for the document.
     */
    public function autoIncrementId($elementName) {
        if(!isset($this->elementsArray[$elementName])) {
            $this->elementsArray[$elementName] = 1;
        } else {
            return $this->elementsArray[$elementName]++;
        }
    }
    
    /**
     * Sets the Document to be visible. If this function is not called with a true argument, the document will not be shown.
     * @param boolean $visible
     */
    public function setVisible($visible) {
        $this->visible = $visible;
    }
    
    /**
     * Show the document html if the Visible atribute is set to true.
     */
    public function __destruct() {
        
        if ($this->visible) {
            echo $this->saveHTML();
        }
    }
    
}

?>
