<?php

namespace app\web\controller;

use xenice\theme\Controller;
use app\web\model\Category;
use app\web\model\Tag;

class ArchiveController extends Controller
{
    public function index()
    {
        $this->title = single_cat_title('', false) . ' - ' . get_bloginfo( 'name' );
        $this->keywords = single_cat_title( '', false );
        $this->description = category_description();
		$this->render();
    }
}