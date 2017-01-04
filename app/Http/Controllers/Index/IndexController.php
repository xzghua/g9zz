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

    /**
     * 分类下帖子列表
     *
     * @param $cate_slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postList($cate_slug)
    {
        $slugId  = $this->categoryRepository->checkSlugExists($cate_slug);

        if (empty($slugId)) $this->indexPushError();

        $request = \Request::only(['filter','cate']);

        if (!empty($request['cate'])) {
            $cate_slug = $request['cate'];
        }

        $cateShow = $this->categoryRepository->getAllIsShowCateByCateSlug($cate_slug);//该分类或者该父分类下所有的is_show列表
        $cateList = $this->categoryRepository->getPostListByCateSlug($cate_slug);
        $postList = $this->postRepository->getPostListByCateList($cateList);

        if ($request['filter'] == 'excellent') {
            $postList = $postList->where('is_excellent','yes');
        }

        $postList = $postList
            ->orderBy('is_top','asc')
            ->with('category')
            ->with('author')
            ->with('last_reply_user')
            ->paginate(per_page());
        return view('index.'.set_index_theme().'.post.index',compact('postList','cateShow'));
    }

}
