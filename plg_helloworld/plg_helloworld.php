<?php

// no direct access
defined('_JEXEC') or die('Restricted access.');

class plgSystemHelloworld extends JPlugin
{
  /**
   * Constructor - note in Joomla 2.5 PHP4.x is no longer supported so wecan use this.
   *
   * @access  protected
   * @param   object    $subject The object to observe
   * @param   array     $config  An array that holds the plugin configuration
   */
  public function __construct(& $subject, $config) {
    parent::__construct($subject, $config);
    $this->loadLanguage();
  }

  /**
   * Plugin method with the same name as the event will be called automatically.
   */
  function onAfterRoute() {
    $app = JFactory::getApplication();
    // plugin codegoes here
    // You can access parameters via $this->params
    return true;
  }
}
