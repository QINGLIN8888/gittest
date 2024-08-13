<!-- 檔案目錄：resources/views/merchandise/manageMerchandise.blade.php -->

<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.register')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        {{-- 錯誤訊息模板元件 --}}
        @include('components.ErorrMessage')

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>編號</th>
                        <th>商品名稱</th>
                        <th>圖片</th>
                        <th>商品狀態</th>
                        <th>商品價格</th>
                        <th>商品庫存</th>
                        <th>編輯</th>
                        <th>刪除</th>
                    </tr>
                    @foreach($MerchandisePaginate as $Merchandise)
                        <tr>
                            <td> {{ $Merchandise->id }}</td>
                            <td> {{ $Merchandise->name }}</td>
                            <td>
                                <img src="{{asset( $Merchandise->photo)}}" width='300' height='300'/>
                            </td>
                            <td>
                                @if($Merchandise->status == 'C')
                                    <span class="label label-default">                                     
                                        編輯中
                                    </span>
                                @else
                                    <span class="label label-success">
                                        銷售中
                                    </span>
                                @endif
                            </td>
                            <td> {{ $Merchandise->price }}</td>
                            <td> {{ $Merchandise->remain_count }}</td>
                            <td>
                                    <a href="/merchandise/{{ $Merchandise->id }}/edier" class="link-warning">
                                        編輯
                                    </a>
                            </td>
                            <td>
                                   
                                    <a href="/merchandise/{{ $Merchandise->id }}/delete" class="link-danger">
                                        刪除
                                    </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{-- 分頁頁數按鈕 --}}
                {{ $MerchandisePaginate->links() }}
            </div>
        </div>
    </div>
@endsection