<?php

namespace App\Http\Controllers\Index;

use App\Repositories\Eloquent\CategoryRepository;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\PostRepository;

class IndexController extends Controller
{
    public $categoryRepository;

    public $postRepository;

    public function __construct(CategoryRepository $categoryRepository,PostRepository $postRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAllSortCate();
        return view('index.'.set_index_theme().'.index',compact('categories'));
    }


    public function postList($cate_name)
    {
//        dd($cate_name);
        $cateList = $this->categoryRepository->getPostListByCateName($cate_name);
        $postList = $this->postRepository->getPostListByCateList($cateList);
        dd($postList);
        $cateSlug = $this->categoryRepository->getCateSlug($cate_name);
        dd(config('categories')['ylsc'],$cateList,$cateSlug);


        return view('index.'.set_index_theme().'.post.index');
    }

}
