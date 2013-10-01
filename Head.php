<?php

namespace Common\Framework\Html;


/**
 * Description of Head
 * 
 * Abstraction of the  HEAD section.
 *
 * @author rodrigo
 */
class Head Extends Element{
    
    /**
     * Start the construction of the head.
     * @param String $title
     */
    public function __construct(Document $document) {
        
        parent::__construct($document,"head");
        $this->document->appendChild($this);
    }
    
    /**
     * Set the title of the page.
     * @param String $title
     */
    public function setTitle($title) {
        $title = $this->document->createElement("title",$title);
        $this->appendChild($title);
    }
    
    /**
     * Set the favicon of the document
     * @param type $type the type of the file. It have to be the mime type, not the extension.
     */
    public function setFavIcon($href) {
        $link = new Element($this->document, "link");
        $this->appendChild($link);
        $link->setAttribute("rel", "favorite icon");
        $link->setAttribute("href", $href);
    }
    
    /**
     * Add a meta tag to the head section.
     * @param String $name atribute name of the meta tag
     * @param String $content atribute content of the meta tag.
     */
    public function addMetaTag($name, $content) {
        
        $meta = $this->document->createElement("meta");
        
        $meta->setAttribute("name", $name);
        $meta->setAttribute("content", $content);
        
        $this->appendChild($meta);
    }
    
    /**
     * Add a Stylesheet to the head section
     * @param String $path path to the stylesheet file, relative to the server's document root (whith starting '/')
     */
    public function addStyleSheet($path, $theme=NULL) {
        
        $link = $this->document->createElement('link');
        
        $link->setAttribute("rel", "stylesheet");
        if($theme !== NULL)
            $link->setAttribute("id", $theme);
        $link->setAttribute("href", $path);
        
        $this->appendChild($link);
    }
    
    /**
     * Sets the icon that will be used when saved as WebApp on mobile devices.
     * @param String $path path to the icon file, relative to the server's document root (whith starting '/')
     */
    public function setAppleTouchIcon($path) {
        
        $link = $this->document->createElement('link');
        
        $link->setAttribute("rel", "apple-touch-icon");
        $link->setAttribute("href", $path);
        
        $this->appendChild($link);
    }
    
    /**
     * Add a javascript script to the head section
     * @param String,boolean $path path to the javascript file, relative to the server's document root (whith starting '/')
     * 
     */
    public function addJavaScript($path) {
        
        $script = $this->document->createElement('script');
        
        $script->setAttribute("type", "text/javascript");
        $script->setAttribute("src", $path);
        
        $this->appendChild($script);
    }
    
    /**
     * Add a javascript plain code Tag to the head section
     * @param String $code javascript code to be added
     */
    public function addJavascriptCode($code) {
        $script = $this->document->createElement('script');
        
        $script->setAttribute("type", "text/javascript");
        $script->appendChild (new \DOMText($code));
        
        $this->appendChild($script);
    }
    
    /**
     * Set the charset of the page.
     * @param String $charset the new Charset
     */
    public function setCharset($charset) {
        
        $meta = $this->document->createElement("meta");
        
        $meta->setAttribute("http-equiv", "Content-Type");
        $meta->setAttribute("content", "text/html");
        $meta->setAttribute("charset", $charset);
        
        $this->appendChild($meta);
    }
    
}

?>
