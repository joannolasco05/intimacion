<?php
namespace App\Controller;

use App\Controller\AppController;
//App::uses('AppController', 'Controller');
/**
 * PDF Controller
 *
 */
class PDFsController extends AppController {

    public $uses=array();
    
    public function index(){
      
    }
  
    public function viewpdf() {
       // $this->redirect('\test\tutos2.php');
       
      //App::import('Vendor', 'Fpdf', array('file' =&gt; 'fpdf/fpdf.php'));
      $this->viewBuilder()->layout('pdf'); //this will use the pdf.ctp layout
   
        //$this->set('fpdf', new FPDF('P','mm','A4'));
        //pass data to view
        $this->set('data', 'Hello, PDF world');
        //render the pdf view (app/View/[view_name]/pdf.ctp)
        $this->render('pdf');
    }
}
