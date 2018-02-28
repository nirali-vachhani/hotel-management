<?php
abstract class LMVC_ViewRenderer {
	
	private $_viewFile;
	private $_viewDir;
	private $_layoutDir;
	private $_layout;
	private $_viewVars;	
		
	abstract public function init();
	
	abstract public function setCaching($_caching);
	
	abstract public function clearCache();
	
	abstract public function renderView();
	
	abstract public function renderViewFragment($_viewDir,$_viewFile,$_viewVars);
	
	abstract public function renderLayout($_viewContent);
	
	abstract public function getRenderer();
	
	abstract public function registerHelper($_helper);
	
	
	final public function render(){}
	
	final public function setViewFile($_viewFile)
	{	
		$this->_viewFile = $_viewFile;
	}
	
	final public function setViewDir($_viewDir)
	{	
		$this->_viewDir = $_viewDir;
	}
	
	final public function setLayoutDir($_layoutDir)
	{
		$this->_layoutDir = $_layoutDir;
	}	
	
	final public function setLayout($_layout)
	{
		$this->_layout = $_layout;
	}
	
	final public function setViewVars($_viewVars)
	{
		$this->_viewVars = $_viewVars;
	}
	
	final public function getViewFile()
	{	
		return $this->_viewFile;
	}
	
	final public function getViewDir()
	{	
		return $this->_viewDir;
	}
	
	final public function getLayoutDir()
	{
		return $this->_layoutDir;
	}	
	
	final public function getLayout()
	{
		return $this->_layout;
	}
	
	final public function getViewVars()
	{
		return $this->_viewVars;
	}
}
?>