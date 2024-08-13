<!-- 檔案目錄：resources/views/merchandise/editMerchandise.blade.php -->

<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.register')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')
    <div class="container">
        <div class="content-wrap py-0">
																									
			<div class="section p-0 m-0 h-100 position-absolute" style="background: url({{asset('assets/images/parallax/home/1.jpg')}}) center center no-repeat; background-size: cover;"></div>

				<div class="section bg-transparent min-vh-100 p-0 m-0">
					<div class="vertical-middle">
						<div class="container-fluid py-5 mx-auto">
							<div class="text-center">
								<a href="index.html"><img src="{{asset('assets/images/logo-dark.png')}}" alt="Canvas Logo"></a>
							</div>

							<div class="card mx-auto rounded-0 border-0" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
								<div class="card-body text-center" style="padding: 40px;">
                                    <h1 >{{ $title }}</h1>

                                    {{-- 錯誤訊息模板元件 --}}
                                    @include('components.ErorrMessage')

                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="/merchandise/{{ $Merchandise->id }}"
                                                method="post"
                                                enctype="multipart/form-data"
                                            >
                                                {{-- 隱藏方法欄位 --}}
                                                {{ method_field('PUT') }}

                                                <div class="form-group">
                                                    <label for="type">狀態欄</label>
                                                    <select class="form-control"
                                                            name="status"
                                                            id="status"
                                                    >
                                                        <option value="C"
                                                                @if(old('status', $Merchandise->status)=='C') selected @endif
                                                        >
                                                            建立中
                                                        </option>
                                                        <option value="S"
                                                                @if(old('status', $Merchandise->status)=='S') selected @endif
                                                        >
                                                            銷售中
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">商品中文名稱</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="name"
                                                        name="name"
                                                        placeholder="商品中文名稱"
                                                        value="{{ old('name', $Merchandise->name) }}"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="name_en">商品英文名稱</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="name_en"
                                                        name="name_en"
                                                        placeholder="商品英文名稱"
                                                        value="{{ old('name_en', $Merchandise->name_en) }}"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="introduction">商品中文介紹</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="introduction"
                                                        name="introduction"
                                                        placeholder="商品中文介紹"
                                                        value="{{ old('introduction', $Merchandise->introduction) }}"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="introduction_en">商品英文介紹</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="introduction_en"
                                                        name="introduction_en"
                                                        placeholder="商品英文介紹"
                                                        value="{{ old('introduction_en', $Merchandise->introduction_en) }}"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="photo">商品照片</label>
                                                    <input type="file"
                                                        class="form-control"
                                                        id="photo"
                                                        name="photo"
                                                        placeholder="商品照片"
                                                    >
                                                    <img src="{{ asset($Merchandise->photo) }}" />
                                                </div>

                                                <div class="form-group">
                                                    <label for="price">商品價格</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="price"
                                                        name="price"
                                                        placeholder="商品價格"
                                                        value="{{ old('price', $Merchandise->price) }}"
                                                    >
                                                </div>
                                                <div class="form-group">
                                                    <label for="remain_count">庫存數量</label>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="remain_count"
                                                        name="remain_count"
                                                        placeholder="庫存數量"
                                                        value="{{ old('remain_count', $Merchandise->remain_count) }}"
                                                    >
                                                </div>
                                                <button type="submit" class="btn btn-success">更新</button>
                                                {{-- CSRF 欄位--}}
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
    </div>
@endsection