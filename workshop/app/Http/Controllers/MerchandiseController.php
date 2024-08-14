<?php

namespace App\Http\Controllers;
use App\Shop\Entity\Merchandise;
use Illuminate\Support\Facades\Validator;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class MerchandiseController extends Controller
{
    // public function MerchandiseItemPage($merchandise_id)
    // {
    //     return view( 'merchandise.create');
    // }

    public function MerchandiseCreate(){
        
        $binding = [
            'title' => '新增商品',
        ];
        
        // 重新導向至商品編輯頁
        return view('merchandise.create',$binding);
    }


    public function MerchandiseCreateProcess(Request $request)
    {
        // 验证表单数据
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'remain_count' => 'required|integer',
            'status' => 'required|string',
            'type' => 'required|string',
            'introduction' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 如果验证失败，重定向回创建页面并附加错误信息
        if ($validator->fails()) {
            return redirect()->route('merchandise.create')
                ->withErrors($validator)
                ->withInput();
        }

        // 处理图片上传
        $input = request()->all();
        if (isset($input['photo'])){
            // 有上傳圖片
            $photo = $input['photo'];
            // 檔案副檔名
            $file_extension = $photo->getClientOriginalExtension();
            // 產生自訂隨機檔案名稱
            $file_name = uniqid() . '.' . $file_extension;
            // 檔案相對路徑
            $file_relative_path = 'assets/images/merchandise/';
            // 檔案存放目錄為對外公開 public 目錄下的相對位置
            $file_path = public_path($file_relative_path);
            // 裁切圖片
            $photo->move($file_path, $file_name);
            // 設定圖片檔案相對位置
            $input['photo'] = $file_relative_path.$file_name;
        }
    

        // 创建商品
        Merchandise::create($input);

        // 重新导向到商品管理页
        return redirect('/merchandise/manage')->with('success', '商品已成功创建！');
    }


    

    public function MerchandiseEdit($merchandise_id){

        $Merchandise = Merchandise::where('id', $merchandise_id)->First();
        // dd($Merchandise);s
        $binding = [
            'title' => '編輯商品',
            'Merchandise'=> $Merchandise,
        ];

        return view('merchandise.edit',$binding);
      
    }

    public function MerchandiseEditProcess($merchandise_id)
    {
        // 撈取商品資料
        $Merchandise = Merchandise::findOrFail($merchandise_id);
        // 接收輸入資料
        $input = request()->all();
        // dd($input);
        
        
    
        // // 驗證資料
        // $validator = Validator::make($input, $rules);
    
        // if ($validator->fails()) {
        //     // 資料驗證錯誤
        //     return redirect('/merchandise/' . $Merchandise->id . '/edit')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        
        
        if (isset($input['photo'])){
            // 有上傳圖片
            $photo = $input['photo'];
            // 檔案副檔名
            $file_extension = $photo->getClientOriginalExtension();
            // 產生自訂隨機檔案名稱
            $file_name = uniqid() . '.' . $file_extension;
            // 檔案相對路徑
            $file_relative_path = 'assets/images/merchandise/';
            // 檔案存放目錄為對外公開 public 目錄下的相對位置
            $file_path = public_path($file_relative_path);
            // 裁切圖片
            $photo->move($file_path, $file_name);
            // 設定圖片檔案相對位置
            $input['photo'] = $file_relative_path.$file_name;
        }
    
        // 商品資料更新
        $Merchandise->update($input);
        
        // 重新導向到商品編輯頁
        return redirect('/merchandise/manage');
    }

    // 商品管理清單檢視
    public function merchandiseManage()
    {
        // 每頁資料量
        $row_per_page = 10;
        // 撈取商品分頁資料
        $MerchandisePaginate = Merchandise::OrderBy('created_at', 'desc')
            ->paginate($row_per_page);
    
        // 設定商品圖片網址
        foreach ($MerchandisePaginate as &$Merchandise) {
            if (!is_null($Merchandise->photo)) {
                // 設定商品照片網址
                $Merchandise->photo = url($Merchandise->photo);
            }
        }
        
        $binding = [
            'title' => '商品管理',
            'MerchandisePaginate'=> $MerchandisePaginate,
        ];
        
        return view('merchandise.manage', $binding);
    }

    public function merchandiseDelete($merchandise_id)
    {
        
        $Merchandise = Merchandise::where('id', $merchandise_id)->delete();
        return redirect(route('merchandise.manage'));
    }


     // 處理圖片上傳的私有方法
     private function handlePhotoUpload($photo)
     {
         // 產生自訂隨機檔案名稱
         $file_name = uniqid() . '.' . $photo->getClientOriginalExtension();
         // 檔案相對路徑
         $file_relative_path = 'images/merchandise/';
         // 將圖片存儲至 public 目錄中並取得存儲的相對路徑
         $file_path = $photo->storeAs($file_relative_path, $file_name, 'public');
 
         // 返回圖片的 URL
         return Storage::url($file_path);
     }



}