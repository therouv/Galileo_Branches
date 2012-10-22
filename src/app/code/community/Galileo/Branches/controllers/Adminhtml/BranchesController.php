<?php

class Galileo_Branches_Adminhtml_BranchesController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Branches'))->_title($this->__('List'));
        $this->loadLayout();
        $this->_setActiveMenu('branches/list');
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $this->_title($this->__('Branches'))->_title($this->__('List'));
        $this->loadLayout();
        $this->_setActiveMenu('branches/list');
        $this->renderLayout();
    }

    public function saveAction()
    {
        if ($this->getRequest()->isPost()) {
            try {
                $post = $this->getRequest()->getPost();
                $model = Mage::getModel('branches/branch')->setData($post)->save();
                $this->_getSession()->addSuccess('Entry successfully saved.');
            } catch (Exception $e) {
                $this->_getSession()->addError(
                    Mage::helper('branches')->__('Error during saving. Please try again.')
                );
                $this->_getSession()->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/');
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            $model = Mage::getModel('branches/branch')->load($id);
            if ($model->getId()) {
                $model->delete();
                $this->_getSession()->addSuccess(
                    Mage::helper('branches')->__('Entry was successfully deleted.')
                );
            }
        }
        $this->_redirect('*/*');
    }
}
