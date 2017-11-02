<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Pages extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('home');
    $this->load->view('footer');
  }

  public function Empresa()
  {
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('empresa');
    $this->load->view('footer');
  }

  public function SegurancaDoTrabalho()
  {
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('seguranca-do-trabalho');
    $this->load->view('footer');
  }

  public function GestaoDeQualidade()
  {
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('gestao-de-qualidade');
    $this->load->view('footer');
  }

  public function Contato()
  {
    $this->load->view('head');
    $this->load->view('header');
    $this->load->view('contato');
    $this->load->view('footer');
  }
}