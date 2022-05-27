@extends('frontend.layout.main')
@section('content')
    <form action="{{route('command.store')}}" method="POST" >
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
                            <h1 class="h4 ls-tight">Tạo mới lệnh điều khiển</h1>
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
                    <label class="form-label">Tên lệnh điều khiển</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên trạm"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Tên không được để trống</span>
                </div>
                <div>
                    <label class="form-label">Code lệnh điều khiển</label>
                    <input type="text" name="code" class="form-control" placeholder="Nhập địa Topic"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Code lệnh điều khiển</span>
                </div>
                <div class="row g-6">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label">Trạng thái lệnh điều khiển</label>
                                (<span class="text-sm text-muted mb-6">Kích hoạt lệnh điều khiển để người dùng sử dụng sử dụng lệnh điều khiển này </span>)
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
