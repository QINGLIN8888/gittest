@extends('layout.master')

@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container">

            {{-- 錯誤訊息模板元件 --}}
            @include('component.errorMessage')

            <h1>{{ $title }}</h1>

            <div class="form-widget">
            <form action="/merchandise/{{ $Merchandise->id }}" method="post" enctype="multipart/form-data">
                <div class="form-result"></div>

                <div class="row shadow bg-light border">
                    <!-- 圖片預覽 -->
                    <div class="col-lg-4 dark position-relative" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)) center center / cover; min-height: 400px;">
                        <div class="image-container text-center w-100 h-100 d-flex justify-content-center align-items-center position-relative" id="image-preview-container">
                            <label for="image-upload" class="upload-icon position-absolute" id="upload-icon">+</label>
                            <img id="preview-img" src="{{ asset($Merchandise->photo) }}"  style="width: 100%; height: 100%;">
                            <input type="file" id="image-upload" name="photo" style="display: none;" accept="image/*" onchange="previewImage(event)">
                        </div>
                    </div>
                    <div class="col-lg-8 p-5">
                        
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="name">名稱 *</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" id="name" class="form-control required" value="{{ old('name', $Merchandise->name) }}" placeholder="商品名稱">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="price">價格 *</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="price" id="price" class="form-control required" value="{{ old('price', $Merchandise->price) }}" placeholder="商品價格">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="amount">數量 *</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="amount" id="amount" class="form-control required" value="{{ old('amount', $Merchandise->amount) }}" placeholder="商品總數量">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="product-form-status">狀態 *</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="btn-group d-flex" role="group">
                                            <input type="radio" class="btn-check required" name="status" id="product-form-status-C" value="C" {{ $Merchandise->status == 'C' ? 'checked' : '' }}>
                                            <label for="product-form-status-C" class="btn btn-outline-dark font-body ls-0 text-transform-none">未上架</label>

                                            <input type="radio" class="btn-check required" name="status" id="product-form-status-S" value="S" {{ $Merchandise->status == 'S' ? 'checked' : '' }}>
                                            <label for="product-form-status-S" class="btn btn-outline-dark font-body ls-0 text-transform-none">銷售中</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="type">類型 *</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <select class="form-select required" name="type" id="type">
                                                <option value="A商品" {{ $Merchandise->type == 'A商品' ? 'selected' : '' }}>A商品</option>
                                                <option value="B商品" {{ $Merchandise->type == 'B商品' ? 'selected' : '' }}>B商品</option>
                                                <option value="C商品" {{ $Merchandise->type == 'C商品' ? 'selected' : '' }}>C商品</option>
                                                <option value="D商品" {{ $Merchandise->type == 'D商品' ? 'selected' : '' }}>D商品</option>
                                                <option value="E商品" {{ $Merchandise->type == 'E商品' ? 'selected' : '' }}>E商品</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 form-group">
                                <div class="row">
                                    <div class="col-sm-2 col-form-label">
                                        <label for="illustrate">說明 *</label>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <textarea name="illustrate" id="illustrate" class="form-control required" cols="30" rows="5" placeholder="商品說明">{{ old('illustrate', $Merchandise->illustrate) }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-none">
                                <input type="text" id="fitness-form-botcheck" name="fitness-form-botcheck" value="">
                            </div>
                            <div class="col-12 d-flex justify-content-end align-items-center">
                                <div>
                                    <a href="/merchandise/manage">
                                        <button type="button" id="calories-trigger" class="btn btn-secondary">取消</button>
                                    </a>
                                </div>
                                <button type="submit" name="fitness-form-submit" class="btn btn-success ms-2">確認修改</button>
                            </div>

                            <input type="hidden" name="prefix" value="fitness-form-">
                            <input type="hidden" name="subject" value="Modify Merchandise">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->

<script>
     function previewImage(event) {
            const reader = new FileReader();
            const previewImg = document.getElementById('preview-img');

            reader.onload = function() {
                previewImg.src = reader.result;
                previewImg.style.display = 'block';
            };

            reader.readAsDataURL(event.target.files[0]);
        }       

        // 加入圖片區域的動畫效果
        const imagePreviewContainer = document.getElementById('image-preview-container');
            imagePreviewContainer.addEventListener('mouseover', () => {
                imagePreviewContainer.style.transition = 'background-color 0.3s ease';
                imagePreviewContainer.style.backgroundColor = 'rgba(255, 255, 255, 0.5)'; // 背景变淡且呈现白色
            });

            imagePreviewContainer.addEventListener('mouseout', () => {
                imagePreviewContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.3)'; // 恢复原来的背景色
            });

            // 當圖片預覽被點擊時，允許用戶重新上傳圖片
            imagePreviewContainer.addEventListener('click', () => {
            if (!isDialogOpen) {
                isDialogOpen = true;
                document.getElementById('image-upload').click();
                setTimeout(() => {
                    isDialogOpen = false;
                }, 500);  // 延遲500毫秒以避免多次觸發
            }
        });


</script>

<style>
    .upload-icon {
        font-size: 100px; /* 調整大小 */
        color: white;
        cursor: pointer;
    }

    .image-container {
        background: rgba(255, 255, 255, 0.2); /* 灰底 */
        min-height: 400px; /* 保持固定高度 */
    }

    #image-preview-container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
    }
</style>

@endsection