
@extends('layout.master')

@section('content')

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap" style="background-color: #F3F1EA">
            <div class="container">

                {{-- 錯誤訊息模板元件 --}}
                @include('component.errorMessage')

                <div class="row justify-content-center mb-5">

                    <div class="col-12 text-center">
                        <h3 class="h1 fw-bold mb-3">{{ $title }}</h3>
                        <p>點擊編輯、刪除可針對商品進行處理</p>
                    </div>
                    <div class="row justify-content-end mb-5">
                        <div class="col-auto">
                            <a href="/merchandise/create" class="btn btn-outline-success m-0">
                                <i class="fas fa-plus"></i> 新增商品
                            </a>
                        </div>
                    </div>

                                                        
                    <div class="border rounded p-4 mb-4 h-shadow all-ts bg-white h-translatey-sm">
                        <div class="row align-items-center col-mb-30">
                            <table class="table table-hover">
                                <tr align='center'>
                                    <th>編號</th>
                                    <th>商品名稱</th>
                                    <th>圖片</th>
                                    <th>狀態</th>
                                    <th>商品類型</th>
                                    <th>價格</th>
                                    <th>庫存數量</th>
                                    <th>產品說明</th>
                                    <th>編輯</th>
                                    <th>刪除</th>
                                </tr>

                                @foreach($MerchandisePaginate as $Merchandise)
                                <tr>
                                    <td align='center'> {{ $Merchandise->id }}</td>
                                    <td align='center'> {{ $Merchandise->name }}</td>
                                    <td align='center'>
                                        @if ($Merchandise->photo)
                                            <img src="{{ $Merchandise->photo }}" alt="商品图片"  width='100' height='100'/>
                                        @else
                                            <img  alt="無圖片" style="max-width: 100%; height: auto;">
                                        @endif
                                    </td>
                                    <td align='center'v>
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
                                    <td align='center'v>
                                        @if($Merchandise->type == 'A商品')
                                            <span class="label label-default">
                                                A商品
                                            </span>
                                        @elseif($Merchandise->type == 'B商品')
                                            <span class="label label-default">
                                                B商品
                                            </span>
                                        @elseif($Merchandise->type == 'C商品')
                                            <span class="label label-default">
                                                C商品
                                            </span>
                                        @elseif($Merchandise->type == 'D商品')
                                            <span class="label label-default">
                                                D商品
                                            </span>
                                        @else($Merchandise->type == 'E商品')
                                            <span class="label label-success">
                                                E商品
                                            </span>
                                        @endif
                                    </td>
                                    <td align='center'> {{ $Merchandise->price }} </td>
                                    <td align='center'> {{ $Merchandise->remain_count }}</td>
                                    <td align='center'> {{ $Merchandise->introduction }}</td>
                                    <td align='center'>
                                        <a href="/merchandise/{{ $Merchandise->id }}/edit">
                                            <i class="fa fa-pencil" aria-hidden="true" style="color:black"></i>
                                        </a>
                                    </td>
                                    <td align='center'>
                                        <div class="col-lg-2 text-lg-end col-md-6">
                                            <a href="/merchandise/{{ $Merchandise->id }}/delete">
                                                <i class="fa fa-trash" aria-hidden="true" style="color:red"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->


</div><!-- #wrapper end -->




@endsection