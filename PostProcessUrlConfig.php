<?php

class PostProcessUrlConfig extends ModuleConfig{

	public function getDefaults() {
	    return array(
	      'default_length' => '20',
	    );
	}

	/*
	* getInputfields()
	*
	* return:  $inputfields
	*/

	// create form within PW admin to enable configuration of module
	public function getInputfields() {

		// get module getInputfields set config class
    	$inputfields = parent::getInputfields();

		// get InputfieldSelect module
    	$f = $this->modules->get('InputfieldInteger');
    	$f->attr('name', 'default_length');
    	$f->label = 'Default length of page URLs';
		$f->description = 'e.g. 10 - for ten characters long';

		// add inputfields
		$inputfields->add($f);

		// return module config inputs
	    return $inputfields;
  	}
}
