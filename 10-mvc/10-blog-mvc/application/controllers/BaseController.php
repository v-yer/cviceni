<?php

namespace Blog\Controllers;

use Blog\Library\Controller;
use Blog\Model\CategoriesModel;
use Blog\Model\Entities\Category;

/**
 * Class BaseController
 * @package Blog\Controllers
 */
abstract class BaseController extends Controller{
  /** @var CategoriesModel $categoriesModel */
  protected $categoriesModel;
  /** @var  Category[] $categories */
  public $categories;

  /**
   * BaseController constructor.
   */
  public function __construct(){
    parent::__construct();
    $this->categoriesModel=CategoriesModel::getInstance();
    $this->categories=$this->categoriesModel->findAll();
  }

}