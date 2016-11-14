<?php
/**
 * Created by PhpStorm.
 * User: vellw
 * Date: 16-11-14
 * Time: 下午6:04
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->load()->view('');
    }
}