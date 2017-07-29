<?php

class ParentsController extends \BaseController {

	var $data = array();
	var $panelInit ;
	var $layout = 'dashboard';

	public function __construct(){
		$this->