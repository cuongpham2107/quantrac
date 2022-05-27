@extends('frontend.layout.main')
@section('content')
    <style>
        span.form-item-click.d-flex.align-items-center.border.border-primary-hover.text-heading.p-3.rounded-2 {
            background: #fff;
        }

        i.bi.bi-file-earmark-post-fill {
            padding-right: 10px;
        }

    </style>
    <header>
        <div class="container-fluid">
            <div class="border-bottom pt-6">
                <div class="row align-items-center">
                    <div class="col-sm col-12">
                        <h1 class="h2 ls-tight">Data Image</h1>
                    </div>
                    {{-- <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                        <div class="hstack gap-2 justify-content-sm-end">

                            <a href="{{route('command.create')}}" class="btn btn-sm btn-primary">
                                <span class="pe-2"><i class="bi bi-plus-square-dotted"></i> </span>
                                <span>Tạo lệnh điều khiển</span>
                            </a>
                        </div>
                    </div> --}}
                </div>
                <ul class="nav nav-tabs overflow-x border-0">
                    <li class="nav-item"><a href="#" class="nav-link active">Tất cả Image</a></li>
                    <li class="nav-item">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main class="py-6 bg-surface-secondary" >
        <div class="container-fluid px-xxl-16">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4">Năm 2022</h4>
                        <div class="row g-3" x-data="">
                            <template x-for="(val,index) in new Array(12)" :key="index">
                                <div class="col-xxl-3 col-lg-6">
                                    <div class="position-relative border border-dashed rounded">
                                        <div class="p-3 d-flex align-items-center">
                                            <div class="me-4">
                                                <div class="icon icon-shape text-xl bg-orange-500 text-white"><i
                                                        class="bi bi-card-image"></i></div>
                                            </div>
                                            <div class="flex-fill">
                                                <a :href="'{{url('media')}}/'+(index+1)" class="d-block h6 text-sm font-semibold mb-1">Tháng <span x-text="index+1"></span> </a> 
                                                <span class="d-block text-xs">2560 files</span>
                                            </div>
                                            <div class="ms-4 pe-2 text-end">
                                                <div class="dropdown"><a class="text-muted" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                            class="bi bi-three-dots-vertical"></i></a>
                                                    <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action
                                                        </a><a href="#!" class="dropdown-item">Another action </a><a href="#!"
                                                            class="dropdown-item">Something else here</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            {{-- @for( $i = 1 ; $i <= 12; $i++)
                            
                            <div class="col-xxl-3 col-lg-6">
                                <div class="position-relative border border-dashed rounded">
                                    <div class="p-3 d-flex align-items-center">
                                        <div class="me-4">
                                            <div class="icon icon-shape text-xl bg-orange-500 text-white"><i
                                                    class="bi bi-card-image"></i></div>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="{{route('media.show', $i)}}" class="d-block h6 text-sm font-semibold mb-1">Tháng {{$i}} </a> 
                                            <span class="d-block text-xs">2560 files</span>
                                        </div>
                                        <div class="ms-4 pe-2 text-end">
                                            <div class="dropdown"><a class="text-muted" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                        class="bi bi-three-dots-vertical"></i></a>
                                                <div class="dropdown-menu"><a href="#!" class="dropdown-item">Action
                                                    </a><a href="#!" class="dropdown-item">Another action </a><a href="#!"
                                                        class="dropdown-item">Something else here</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>
@endsection
