<?php
//
// iTop module definition file
//

/** @noinspection PhpUnhandledExceptionInspection */
SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'fk-is-visualisation/1.0.0',
	array(
		// Identification
		//
		'label' => 'Information Systems',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-welcome-itil/2.5.0', // For the loading order of the menus
			'itop-legacy-search-base/1.0.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'main.fk-is-visualisation.php',
			'model.fk-is-visualisation.php',
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);
