<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use Illuminate\Http\Request;
use Mail;
use Product;

class UserAuthController extends Controller
{
    public function Profile($id)
    {
        return $id.'<br> my id:'.$id;
    }

    // public function SignUp()
    // {
    //     $binding = [
    //         'title' => '註冊',
    //     ];
    //     return view( 'auth.signup' , $binding);
    // }

    public function Shop()
    {
        
        return view( 'auth.shop' );
    }

    public function LogIn()
    {
        // $binding = [
        //     'title' => '登入',
        // ];
        return view( 'auth.login');
    }

    public function SignOut()
    {
        session()->flush();
        return redirect('/user/auth/login');
    }


    public function Home()
    {
        // $binding = [
        //     'title' => 'Home',
        // ];
        return view( 'auth.home');
    }

    public function SignUpProcess()
    {
        $form_data = request()->all();
    
        $validator = Validator::make($form_data, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',  
            'nickname' => 'required|string',
            'type' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return redirect('/user/auth/signup')
                ->withInput()
                ->withErrors($validator);
        }
    
        $user = User::create([
            'email' => $form_data['email'],
            'password' => Hash::make($form_data['password']),
            'nickname' => $form_data['nickname'],
            'type' => $form_data['type'],
        ]);
    
        // 发送邮件或其他处理
    
        return redirect('/user/auth/login');
    }
    

    public function LoginProcess()
    {
        $form_data = request()->all();
        // dd($form_data);
        $user = User::where('email', $form_data['email'])->FirstOrFail();
        if (Hash::check($form_data['password'], $user->password)){
            echo '登入成功';
            session() -> put('user_id', $user->id);
            session() ->put('user_email', $user->email);
            session() ->put('user_type', $user->type);
            //導向首頁
            return redirect('/user/auth/home');
        }else{
            echo '登入失敗';
            return redirect('/user/auth/login')
            ->withInput()
            ->withErrors(['無此帳號，帳號或密碼錯誤']);

        }

    }

    public function Fish(){
        
        // 重新導向至商品編輯頁
        return view('auth.fish');
    }

    public function OrderFinish(){
        
        // 重新導向至商品編輯頁
        return view('auth.orderfinish');
    }

    public function CartProcess(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // 默認數量為1
    
        // 從資料庫中獲取商品資訊
        $product = Product::find($productId);
    
        if (!$product) {
            return response()->json(['error' => '商品不存在'], 404);
        }
    
        // 取得當前購物車
        $cart = session()->get('cart', []);
    
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity; // 更新數量
        } else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity, // 使用請求中的數量
                'image' => $product->image
            ];
        }
    
        // 更新購物車到 session
        session()->put('cart', $cart);
    
        // 計算總價
        $total = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
    
        return response()->json([
            'cartItems' => array_values($cart),
            'total' => $total
        ]);
    }
    
    public function CartRemoveProcess(Request $request)
    {
        $productId = $request->input('productId');
        
        // 这里是从购物车中移除商品的逻辑
        // 例如，从 session 中移除商品
        
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return response()->json(['success' => true, 'cart' => $cart]);
    }


    public function Super(){
        
        // 重新導向至商品編輯頁
        return view('component.super');
    }

    public function Moon(){
        
        // 重新導向至商品編輯頁
        return view('component.moon');
    }

    public function Summer(){
        
        // 重新導向至商品編輯頁
        return view('component.summer');
    }

    public function Hotsale(){
        
        // 重新導向至商品編輯頁
        return view('component.hotsale');
    }
   
    public function Cart1(){
        
        // 重新導向至商品編輯頁
        return view('auth.cart1');
    }

    public function AddTocart(Request $request)
    {
        $productId = $request->input('productId');
        
        // 添加商品到購物車的邏輯
        // 例如，將商品 ID 添加到 session 或購物車資料庫中

        $cart = $this->getCart(); // 獲取最新的購物車內容
        
        return response()->json([
            'success' => true,
            'cart' => $cart,
        ]);
    }

    private function getCart()
    {
        // 返回購物車內容的邏輯
        // 例如：
        return view('partials.cart_preview')->render();
    }
    
}