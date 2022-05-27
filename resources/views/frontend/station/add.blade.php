@extends('frontend.layout.main')
@section('content')
    <form action="{{route('station.store')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <header class="position-sticky top-0 overlap-10 bg-surface-primary border-bottom">
            <div class="container-fluid py-4">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center gap-4">
                            <div>
                                <button type="button" class="btn-close text-xs" aria-label="Close"></button>
                            </div>
                            <div class="vr opacity-20 my-1"></div>
                            <h1 class="h4 ls-tight">Tạo mới trạm</h1>
                            @if(session()->has('success'))
                                <div class="vr opacity-20 my-1"></div>
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="hstack gap-2 justify-content-end">

                            <button type="submit" class="btn btn-sm btn-primary"><span>Lưu</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid max-w-screen-md vstack gap-5">
                <div>
                    <label class="form-label">Tên trạm</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên trạm"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Tên không được để trống</span>
                </div>
                <div>
                    <label class="form-label">Topic Trạm</label>
                    <input type="text" name="topic" class="form-control" placeholder="Nhập địa chỉ Topic"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Topic Trạm không được để trống</span>
                </div>
                <div>
                    <label class="form-label">Uid Trạm</label>
                    <input type="text" name="uid" class="form-control" placeholder="Nhập địa chỉ Uid"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Uid Trạm không được để trống</span>
                </div>
                <div>
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ của trạm"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Địa chỉ Trạm không được để trống</span>
                </div>
                <div>
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="rounded border-2 border-dashed border-primary-hover position-relative">
                                <div class="d-flex justify-content-center px-5 py-5">
                                    <label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer">
                                        <input id="file_upload" name="image" type="file" class="visually-hidden">
                                    </label>
                                    <div class="text-center">
                                        <div class="text-2xl text-muted">
                                            <i class="bi bi-upload"></i>
                                        </div>
                                        <div class="d-flex text-sm mt-3">
                                            <p class="font-semibold">Upload a file or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 3MB</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div>
                    <label class="form-label">Trạm thuộc người dùng</label>
                    <select class="form-select" name="customer_id">
                        @foreach($customer as $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="row g-6">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label">Trạng thái trạm</label>
                                (<span class="text-sm text-muted mb-6">Kích hoạt trạm để người dùng sử dụng sử dụng dịch vụ </span>)
                                <br>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="status" type="checkbox" checked="checked">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-0">
            </div>
        </main>
    </form>
@endsection
