@extends('layout.master')

@section('content')

    <!-- Content -->
    <section id="content">
        <div class="content-wrap">
            <div class="container">

                {{-- 錯誤訊息模板元件 --}}
                @include('component.errorMessage')

                <h1>{{ $title }}</h1>

                <div class="form-widget">
                <form id="product-form" action="{{ route('merchandise.create.process') }}"  method="post" enctype="multipart/form-data">
                    <div class="form-result"></div>

                    <div class="row shadow bg-light border">
                        <!-- 圖片預覽 -->
                        <div class="col-lg-4 dark position-relative" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)) center center / cover; min-height: 400px;">
                            <div class="image-container text-center w-100 h-100 d-flex justify-content-center align-items-center position-relative" id="image-preview-container">
                                <img id="preview-img" src="#" alt="圖片預覽" style="display:none; max-width: 100%; max-height: 100%;">
                                <label for="image-upload" class="upload-icon position-absolute" id="upload-icon">+</label>
                                <input type="file" id="image-upload" name="photo" style="display: none;" accept="image/*" onchange="previewImage(event)">
                                </div>
                        </div>
                        <div class="col-lg-8 p-5">
                           
                                @csrf

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-2 col-form-label">
                                            <label for="product-form-name">名稱 <span class="required">*</span></label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" id="name" class="form-control required" placeholder="新增商品名稱">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-2 col-form-label">
                                            <label for="product-form-price">價格 <span class="required">*</span></label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" name="price" id="price" class="form-control required" placeholder="新增商品價格">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-2 col-form-label">
                                            <label for="product-form-amount">數量 <span class="required">*</span></label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input type="text" name="remain_count" id="remain_count" class="form-control required" placeholder="新增商品總數量">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-2 col-form-label">
                                            <label for="product-form-status">狀態 <span class="required">*</span></label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="btn-group d-flex" role="group">
                                                <input type="radio" class="btn-check required" name="status" id="product-form-status-C" value="C">
                                                <label for="product-form-status-C" class="btn btn-outline-dark font-body ls-0 text-transform-none">未上架</label>

                                                <input type="radio" class="btn-check required" name="status" id="product-form-status-S" value="S">
                                                <label for="product-form-status-S" class="btn btn-outline-dark font-body ls-0 text-transform-none">銷售中</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-2 col-form-label">
                                            <label for="product-form-type">類型 <span class="required">*</span></label>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <select class="form-select required" name="type"  id="product-form-type">
                                                    <option value="">選擇商品類型</option>
                                                    <option value="A商品">A商品</option>
                                                    <option value="B商品">B商品</option>
                                                    <option value="C商品">C商品</option>
                                                    <option value="D商品">D商品</option>
                                                    <option value="E商品">E商品</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 form-group">
                                    <div class="row">
                                        <div class="col-sm-2 col-form-label">
                                            <label for="product-form-illustrate">說明 <span class="required">*</span></label>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <textarea name="introduction" id="introduction" class="form-control required" cols="30" rows="5" placeholder="新增商品說明"></textarea>
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
                                    <button type="submit" name="fitness-form-submit" class="btn btn-success ms-2">確認</button>
                                </div>

                                <input type="hidden" name="prefix" value="fitness-form-">
                                <input type="hidden" name="subject" value="New Fitness Received">
                                <input type="hidden" id="fitness-form-calories" name="fitness-form-calories" value="">
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
            
            console.log(event.target.files[0]); // 檢查選擇的圖片文件

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
            position: absolute;
            top: 50%; /* 確保加號在容器中間 */
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2; /* 確保加號顯示在圖片之上 */
        }

        .image-container {
            background: rgba(255, 255, 255, 0.2); /* 灰底 */
            min-height: 400px; /* 保持固定高度 */
            position: relative;
        }

        #image-preview-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
        }  

        .required + .required {
                color: #CC5F5A; /* 星號顏色 */
            }

        .is-invalid {
            border-color: #CC5F5A;
        }

    </style>

@endsection