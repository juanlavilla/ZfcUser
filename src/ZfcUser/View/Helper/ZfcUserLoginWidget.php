<?php

namespace ZfcUser\View\Helper;

use Zend\View\Helper\AbstractHelper,
    ZfcUser\Form\Login as LoginForm,
    Zend\View\Model\ViewModel;

class ZfcUserLoginWidget extends AbstractHelper
{
    /**
     * Login Form
     * @var LoginForm
     */
    protected $loginForm;
    
    /**
     * __invoke 
     * 
     * @access public
     * @return string
     */
    public function __invoke($render = true)
    {
        $vm = new ViewModel(array(
            'loginForm' => $this->getLoginForm()
        ));
        $vm->setTemplate('zfc-user/user/login');
        if ($render) {
            return $this->getView()->render($vm);
        } else {
            return $vm;
        }
    }
    
    /**
     * Retrieve Login Form Object
     * @return LoginForm
     */
    public function getLoginForm()
    {
        return $this->loginForm;
    }

    /**
     * Inject Login Form Object
     * @param LoginForm $loginForm
     * @return ZfcUserLoginWidget 
     */
    public function setLoginForm(LoginForm $loginForm)
    {
        $this->loginForm = $loginForm;
        return $this;
    }
}
