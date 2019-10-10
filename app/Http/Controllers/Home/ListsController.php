<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ListsController extends Controller
{
    //
    public function index(Request $request)
    {
          $search = $request->input('search');

    	// 获取栏目的数据
    	$cates_data = IndexController::getPidCates();
    	// dd($cates_data);
 
    	// 子栏目id
    	$cid= $request->input('cid',0);


    	// 分配子栏目所属父级栏目名称
        $cates_cname_data = IndexController::getCatesCname();
    
        $search = $request->input('search');
         //dd($search);

        $tagname_id = $request->input('tagname_id',0);
         //dd($tagname_id);
        if (empty($search)) {
            if ($tagname_id != 0) {
                // 获取标签云对应的文章
                $cates_lists = DB::table('articles')->where('tid',$tagname_id)->orderBy('id','desc')->get();
            } else {
                // 获取标签云对应的文章
                $cates_lists = DB::table('articles')->where('cid',$cid)->orderBy('ctime','desc')->get();
            }
        } else {
            $cates_lists = DB::table('articles')->where('title','like','%'.$search.'%')->orderBy('ctime','desc')->get();
        }
        

    	// 获取 标签云 数据
        $tagnames_data = DB::table('tagnames')->get();



    	// 获取栏目的数据
    	$cates_data = IndexController::getPidCates();
    	// dd($cates_data);
        // $temp = [];
        // foreach ($cates_data as $k => $v) {
        //     $temp[$v->id] = $v->cname; 
        // }
        // dd($temp);
        // $temp = DB::table('cates')->select('id','cname')->get();
        // dd($temp);
        
         // 获取右侧边栏
        $articles_tuijian_data = IndexController::getrightcatesb();
        $articles_tuijiana_data = IndexController::getrightcatesc();
        $articles_tuijianb_data = IndexController::getrightcatesd();
        
    	return view('home.lists.index',['articles_tuijianb_data'=>$articles_tuijianb_data,'articles_tuijiana_data'=>$articles_tuijiana_data,'articles_tuijian_data'=>$articles_tuijian_data,'cid'=>$cid,'search'=>$search,'tagnames_data'=>$tagnames_data,'cates_lists'=>$cates_lists,'cates_data'=>$cates_data,'cates_cname_data'=>$cates_cname_data]);
    } 
}
