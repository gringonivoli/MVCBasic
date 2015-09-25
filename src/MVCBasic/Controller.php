<?php

namespace MVCBasic;

/**
 * Class Controller
 *
 * Clase abstracta que define un controller basico
 * y su relacion con una view general o especifica.
 *
 * @author Maxi Nivoli <m_nivoli@hotmail.com>
 * @package MVCBasic
 */

abstract class Controller{

    /**
     * @var View
     */
	protected $view;

    /**
     * Constructor
     *
     * @param View $view
     */
	public function __construct(View $view = null){
        $this->view = (isset($view)) ? $view : new View();
	}

    /**
     * Set View
     *
     * Setea una view especifica que herede de la
     * View de MVCBasic.
     *
     * @access protected
     * @param View $view
     */
	protected function setView(View $view){
		$this->view = $view;
	}
}