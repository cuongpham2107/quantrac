@extends('frontend.layout.main')
@section('content')
    <form action="{{route('customer.store')}}" method="POST">
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
                            <h1 class="h4 ls-tight">Tạo mới tài khoản người dùng</h1>
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
                    <label class="form-label">Tên người dùng</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên người dùng"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Tên không được để trống</span>
                </div>
                <div>
                    <label class="form-label">Địa chỉ Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ Email"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Email không được để trống</span>
                </div>
                <div>
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu"
                           required="required">
                    <span class="d-block mt-2 text-sm text-muted">Mật khẩu không được để trống</span>
                </div>
                <div>
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Nhập lại mật khẩu" required="required">
                </div>


                <div class="row g-6">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <label class="form-label">Trạng thái tài khoản</label>
                                (<span class="text-sm text-muted mb-6">Kích hoạt tài khoản người dùng để sử dụng dịch vụ </span>)
                                <br>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="status" type="checkbox" checked="checked"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-0">
                {{--        <div class="row gx-4">--}}
                {{--            <div class="col">--}}
                {{--                <div><label class="form-label">Client</label> <select class="form-select">--}}
                {{--                        <option>Webpixels</option>--}}
                {{--                        <option>Apple</option>--}}
                {{--                        <option>Elrond</option>--}}
                {{--                    </select></div>--}}
                {{--            </div>--}}
                {{--            <div class="col-auto align-self-end"><span class="d-inline-block py-3 font-semibold text-muted">or</span>--}}
                {{--            </div>--}}
                {{--            <div class="col-auto align-self-end">--}}
                {{--                <button type="button" class="btn btn-neutral"><i class="bi bi-plus-lg"></i> <span--}}
                {{--                        class="d-none d-sm-inline ms-2">New client</span></button>--}}
                {{--            </div>--}}
                {{--        </div>--}}
                {{--        <div class="row gx-4 gy-5">--}}
                {{--            <div class="col-md-6">--}}
                {{--                <div><label class="form-label">Start date</label>--}}
                {{--                    <div class="input-group input-group-inline datepicker"><span class="input-group-text pe-2"><i--}}
                {{--                                class="bi bi-calendar"></i> </span><input type="text"--}}
                {{--                                                                          class="form-control flatpickr-input"--}}
                {{--                                                                          placeholder="Select date" data-input=""></div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="col-md-6">--}}
                {{--                <div><label class="form-label">Due date</label>--}}
                {{--                    <div class="input-group input-group-inline datepicker"><span class="input-group-text pe-2"><i--}}
                {{--                                class="bi bi-calendar"></i> </span><input type="text"--}}
                {{--                                                                          class="form-control flatpickr-input"--}}
                {{--                                                                          placeholder="Select date" data-input=""></div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--        </div>--}}
            </div>
        </main>
    </form>
@endsection
