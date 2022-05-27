@extends('frontend.layout.main')
@section('content')
    <form action="{{route('station.update',$station->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <header class="position-sticky top-0 overlap-10 bg-surface-primary border-bottom">
            <div class="container-fluid py-4">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center gap-4">
                            <div>
                                <button type="button" class="btn-close text-xs" aria-label="Close"></button>
                            </div>
                            <div class="vr opacity-20 my-1"></div>
                            <h1 class="h4 ls-tight">Sửa Trạm</h1>
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
                    <label class="form-label">Tên Trạm</label>
                    <input type="text" name="name" value="{{$station->name}}" class="form-control" placeholder="Nhập tên người dùng"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Tên không được để trống</span>
                </div>
                <div>
                    <label class="form-label">Topic Trạm</label>
                    <input type="text" name="topic" value="{{$station->topic}}" class="form-control" placeholder="Nhập Topic Trạm"
                           required="required">

                </div>
                <div>
                    <label class="form-label">Uid Trạm</label>
                    <input type="text" name="uid" value="{{$station->uid}}" class="form-control" placeholder="Nhập Uid Trạm"
                           required="required">

                </div>
                <div>
                    <label class="form-label">Địa chỉ Trạm</label>
                    <input type="text" name="address" value="{{$station->address}}" class="form-control" placeholder="Nhập Địa chỉ Trạm"
                           required="required">

                </div>
                <div>
                    <label class="form-label">Hình ảnh</label>
                    <input type="file" name="image" class="form-control"  >
                    <img src="{{asset('uploads/'.$station->image)}}" height="120" width="120">
                </div>
                <div>
                    <label class="form-label">Trạm thuộc người dùng</label>
                    <select class="form-select" name="customer_id">
                        @foreach($customer as $val)
                            <option @if($val->id == $station->customer_id) selected @endif value="{{$val->id}}">{{$val->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row g-6">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label">Trạng thái tài khoản</label>
                                (<span class="text-sm text-muted mb-6">Kích hoạt tài khoản người dùng để sử dụng dịch vụ </span>)
                                <br>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="status" type="checkbox" @if($station->status == 'on') checked  @endif ></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
            </div>
        </main>
    </form>
@endsection
