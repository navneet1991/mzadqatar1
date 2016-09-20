<?php

namespace App\Http\Controllers;

use Input;
use Session;
use Validator;
use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdadvertisementController extends Controller
{
    public function index(){
        $category_name = Category::where('category_parent', 0)->get();
        return view('addavertisment',['category_name'=>$category_name ]);
    }

    public function subcategory(Request $request){

        $category_name = Category::where('category_id', $request->selectedCatID )->get();
        $subcat_name = Category::where('category_parent',$request->selectedCatID )->get();

        //echo "<pre>"; print_r($subcat_name); die;

        $subcat_name_html='';

        $count = 1;
        foreach ($subcat_name as $key => $value) {

            if ($count%4 == 1) {
                $subcat_name_html.="<div class='row'><div class='col-lg-1 col-md-1 col-sm-1 col-xs-12 adv-boxes-spacing divider'><img src=".url('/')."/assets/images/steps-seprator2.png width='27' height='auto' alt='seprator' class='margin-l-20 seprator-category'></div>";
            }

            $subcat_name_html.="<div class='col-lg-2 col-md-2 col-sm-2 col-xs-12 adv-boxes-spacing category-boxes'>
                <a id=".$value->category_id." href='javascript:void(0);' class='boxid_cat btn btn-adding f-size-16 font-wt-600 '><i class='icon icon-Truck bold color-purple f-size-21'></i>".$value->category_name."</a>
                </div>";

            if ($count%4 == 0) {
                $subcat_name_html.="</div>";
            }

            $count++;
        }

        if ($count%4 != 1) {
            $subcat_name_html.="</div>";
        }

        $arrSub=array('categoryname'=>$category_name[0]->category_name,'subcat_name'=>$subcat_name_html);

        return $arrSub;
    }

    public function adpost(){
        //	echo "<pre>"; print_r($_POST);
        $files = Input::file('file');
        echo "<pre>"; print_r($files); die;
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        foreach($files as $file) {
            if(!empty($file)){
                $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                    $destinationPath = 'f';
                    $filename = $file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;
                }
            }
        }
    }

}