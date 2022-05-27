@extends('frontend.layout.main')
@section('content')
    <header>
        <div class="container-fluid">
            <div class="border-bottom pt-6">
                <div class="row align-items-center">
                    <div class="col-sm col-12">
                        <h1 class="h2 ls-tight"><span class="d-inline-block me-3"></span>Xin chào :
                            {{ Auth::user()->name }}</h1>
                    </div>
                    {{-- <div class="col-sm-auto col-12 mt-4 mt-sm-0">
                        <div class="hstack gap-2 justify-content-sm-end"><a href="#modalExport"
                                class="btn btn-sm btn-neutral border-base" data-bs-toggle="modal"><span
                                    class="pe-2"><i class="bi bi-people-fill"></i> </span><span>Share</span>
                            </a><a href="#offcanvasCreate" class="btn btn-sm btn-primary" data-bs-toggle="offcanvas"><span
                                    class="pe-2"><i class="bi bi-plus-square-dotted"></i>
                                </span><span>Create</span></a>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </header>
    <main class="py-6 bg-surface-secondary">
        {{-- <div class="offcanvas offcanvas-end w-full w-lg-1/3" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
            id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel">
            <div class="offcanvas-header border-bottom py-5 bg-surface-secondary">
                <h5 class="offcanvas-title" id="offcanvasCreateLabel">Create a new project</h5>
                <button type="button" class="btn-close text-reset text-xs" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body vstack gap-5">
                <div><label class="form-label">Name</label> <input type="text" class="form-control"
                        placeholder="Project name"> <span class="d-block mt-2 text-sm text-muted">Make it
                        unique.</span></div>
                <div><label class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Project description ..." rows="2"></textarea> <span class="d-block mt-2 text-sm text-muted">Make it unique.</span>
                </div>
                <hr class="my-0">
                <div><label class="form-label">Select view</label>
                    <div class="hstack gap-3">
                        <div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view"
                                id="project-view-kanban" checked="checked"> <label class="form-item"
                                for="project-view-kanban"><span
                                    class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i
                                        class="bi bi-kanban" style="font-size:2rem"></i></span></label></div>
                        <div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view"
                                id="project-view-list"> <label class="form-item" for="project-view-list"><span
                                    class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i
                                        class="bi bi-view-list" style="font-size:2rem"></i></span></label></div>
                        <div class="form-item-checkable"><input class="form-item-check" type="radio" name="project-view"
                                id="project-view-table"> <label class="form-item" for="project-view-table"><span
                                    class="form-item-click d-inline-flex align-items-center justify-content-center form-control w-24 h-24 text-center text-muted"><i
                                        class="bi bi-table" style="font-size:2rem"></i></span></label></div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="vstack gap-4">
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio"
                            name="projecy-privacy" checked="checked">
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Private</h6><span class="d-block text-muted text-sm"><i
                                    class="bi bi-lock-fill me-1"></i> Only you will be able to see this
                                project</span>
                        </div>
                    </div>
                    <div class="d-flex gap-3"><input class="form-check-input flex-shrink-0 text-lg" type="radio"
                            name="projecy-privacy">
                        <div class="pt-1 form-checked-content">
                            <h6 class="mb-1 lh-relaxed">Make it public</h6><span class="d-block text-muted text-sm"><i
                                    class="bi bi-people-fill me-1"></i>
                                Everyone in this workspace will be able to see this project</span>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="row gx-4">
                    <div class="col-md">
                        <div><label class="form-label">Client</label> <select class="form-select">
                                <option>Webpixels</option>
                                <option>Apple</option>
                                <option>Elrond</option>
                            </select></div>
                    </div>
                    <div class="col-auto align-self-end"><span
                            class="d-inline-block py-3 font-semibold text-muted">or</span></div>
                    <div class="col-md-auto align-self-end">
                        <button type="button" class="btn btn-neutral"><i class="bi bi-plus-lg me-2"></i>New client
                        </button>
                    </div>
                </div>
                <div class="row gx-4">
                    <div class="col-md-6">
                        <div><label class="form-label">Start date</label>
                            <div class="input-group input-group-inline datepicker"><span class="input-group-text pe-2"><i
                                        class="bi bi-calendar"></i> </span><input type="text"
                                    class="form-control flatpickr-input" placeholder="Select date" data-input=""></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div><label class="form-label">Due date</label>
                            <div class="input-group input-group-inline datepicker"><span class="input-group-text pe-2"><i
                                        class="bi bi-calendar"></i> </span><input type="text"
                                    class="form-control flatpickr-input" placeholder="Select date" data-input=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer py-2 bg-surface-secondary">
                <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="offcanvas">Close
                </button>
                <button type="button" class="btn btn-sm btn-primary">Save
                </button>
            </div>
        </div>
        <div class="modal fade" id="modalExport" tabindex="-1" aria-labelledby="modalExport" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content shadow-3">
                    <div class="modal-header">
                        <div class="icon icon-shape rounded-3 bg-soft-primary text-primary text-lg me-4"><i
                                class="bi bi-globe"></i></div>
                        <div>
                            <h5 class="mb-1">Share to web</h5><small class="d-block text-xs text-muted">Publish
                                and share link with anyone</small>
                        </div>
                        <div class="ms-auto">
                            <div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox"
                                    id="flexSwitchCheckChecked" checked="checked"> <label class="form-check-label"
                                    for="flexSwitchCheckChecked"></label></div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex align-items-center mb-5">
                            <div>
                                <p class="text-sm">Anyone with this link <span class="font-bold text-heading">can
                                        view</span></p>
                            </div>
                            <div class="ms-auto"><a href="#" class="text-sm font-semibold">Settings</a></div>
                        </div>
                        <div>
                            <div class="input-group input-group-inline"><input type="email" class="form-control"
                                    placeholder="username" value="https://webpixels.io/your-amazing-link">
                                <span class="input-group-text"><i class="bi bi-clipboard"></i></span>
                            </div>
                            <span class="mt-2 valid-feedback">Looks good!</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="me-auto"><a href="#" class="text-sm font-semibold"><i
                                    class="bi bi-clipboard me-2"></i>Copy link</a></div>
                        <button type="button" class="btn btn-sm btn-neutral" data-bs-dismiss="modal">Close
                        </button>
                        <button type="button" class="btn btn-sm btn-success">Share file
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container-fluid" x-data="video" style="position: relative">
            @if (Auth::user()->quyen == 'admin')
                <div class="row g-6 mb-6">
                    {{-- <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="mb-0">Camera 1</h5>
                        </div>
                        <div class="px-4">
                            <video id="my-player" class="video-js" controls preload="auto"
                                poster="//vjs.zencdn.net/v/oceans.png" data-setup='{}'>
                                <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                                </source>
                                <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm">
                                </source>
                                <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
                                </source>
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">
                                        supports HTML5 video
                                    </a>
                                </p>
                            </video>
                        </div>
                        <style>
                            .control {
                                position: relative;
                                width: 120px;
                                height: 120px;
                                background: #e7eaf0;
                                border-radius: 50%;

                            }

                            .control .up {
                                position: absolute;
                                top: 0px;
                                left: 50%;
                                transform: translateX(-50%);

                            }

                            .control .down {
                                position: absolute;
                                bottom: 0px;
                                left: 50%;
                                transform: translateX(-50%);
                            }

                            .control .left {
                                position: absolute;
                                top: 50%;
                                left: 0;
                                transform: translateY(-50%);
                            }

                            .control .right {
                                position: absolute;
                                top: 50%;
                                right: 0;
                                transform: translateY(-50%);
                            }

                            .control svg {
                                fill: #ebcfcf !important;
                                filter: drop-shadow(3px 3px 2px rgba(0, 0, 0, 0.5));
                                cursor: pointer;
                            }

                            .control svg:hover {

                                fill: #ddd117 !important;
                                filter: drop-shadow(inset 3px 3px 2px rgba(0, 0, 0, 0.5));
                            }

                            .zoom svg {
                                fill: #6a6565 !important;
                                filter: drop-shadow(3px 3px 2px rgba(0, 0, 0, 0.5));
                                cursor: pointer;
                            }

                            .plus svg {
                                fill: #6a6565 !important;
                                filter: drop-shadow(3px 3px 2px rgba(0, 0, 0, 0.5));
                                cursor: pointer;
                            }

                            .plus .plus-in {
                                background: #e7eaf0 !important;
                            }

                            .plus .plus-out {
                                background: #e7eaf0 !important;
                            }

                            .plus .plus-in:hover {
                                background: #ddd117 !important;
                            }

                            .plus .plus-out:hover {
                                background: #ddd117 !important;
                            }

                            .zoom .zoom-in {
                                background: #e7eaf0 !important;
                            }

                            .zoom .zoom-out {
                                background: #e7eaf0 !important;
                            }

                            .zoom .zoom-in:hover {
                                background: #ddd117 !important;
                            }

                            .zoom .zoom-out:hover {
                                background: #ddd117 !important;
                            }

                            .plus {
                                margin: 10px;
                                padding: 0px;
                                padding-left: 10px;
                            }

                        </style>
                        <div class="row g-6 mb-6 mt-6 ml-5 pl-5" style="    padding-left: 30px;">
                            <div class="col-xl-3 col-sm-4 col-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Điều khiển</span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="control">
                                            <div class="up">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="40"
                                                    height="40" style="fill: rgb(235 243 0);transform: ;msFilter:;">
                                                    <path
                                                        d="M3 19h18a1.002 1.002 0 0 0 .823-1.569l-9-13c-.373-.539-1.271-.539-1.645 0l-9 13A.999.999 0 0 0 3 19z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="left">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="40"
                                                    height="40" style="fill: rgb(235 243 0);transform: ;msFilter:;">
                                                    <path
                                                        d="m4.431 12.822 13 9A1 1 0 0 0 19 21V3a1 1 0 0 0-1.569-.823l-13 9a1.003 1.003 0 0 0 0 1.645z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="down">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="40"
                                                    height="40" style="fill: rgb(235 243 0);transform: ;msFilter:;">
                                                    <path
                                                        d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="right">
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="40"
                                                    height="40" style="fill: rgb(235 243 0);transform: ;msFilter:;">
                                                    <path
                                                        d="M5.536 21.886a1.004 1.004 0 0 0 1.033-.064l13-9a1 1 0 0 0 0-1.644l-13-9A1 1 0 0 0 5 3v18a1 1 0 0 0 .536.886z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 zoom">
                                        <div class="col-auto " style="text-align: center;margin-bottom: 20px;">
                                            <div class="icon icon-shape bg-info text-white text-lg rounded-circle zoom-in">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path d="M11 6H9v3H6v2h3v3h2v-3h3V9h-3z"></path>
                                                    <path
                                                        d="M10 2c-4.411 0-8 3.589-8 8s3.589 8 8 8a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8zm0 14c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-auto" style="text-align: center;">
                                            <div
                                                class="icon icon-shape bg-info text-white text-lg rounded-circle zoom-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path d="M6 9h8v2H6z"></path>
                                                    <path
                                                        d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-sm-3 col-6">
                                <div class="col-md-12">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Chụp ảnh</span>
                                </div>
                                <div class="card"
                                    style="box-shadow: 0 3px 3px -1px rgb(10 22 70 / 10%), 0 0 1px 2px rgb(10 22 70 / 6%) !important; margin-bottom: 10px">
                                    <a href="#" @click="await capture('ebbc06a8-ae19-46d3-8662-c19268c68466/control' )">
                                        <div class="card-body" style="padding: 1rem !important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M12 8c-2.168 0-4 1.832-4 4s1.832 4 4 4 4-1.832 4-4-1.832-4-4-4zm0 6c-1.065 0-2-.935-2-2s.935-2 2-2 2 .935 2 2-.935 2-2 2z">
                                                </path>
                                                <path
                                                    d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zM4 18V7h3c.266 0 .52-.105.707-.293L10.414 4h3.172l2.707 2.707A.996.996 0 0 0 17 7h3l.002 11H4z">
                                                </path>
                                            </svg>
                                            <span class="h6 font-semibold text-muted text-sm  mb-2">Chụp ảnh</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="card"
                                    style="box-shadow: 0 3px 3px -1px rgb(10 22 70 / 10%), 0 0 1px 2px rgb(10 22 70 / 6%) !important;">
                                    <div class="row">
                                        <div class="col-md-4 plus">
                                            <div class="icon icon-shape bg-info text-white text-lg rounded-circle plus-in">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="col-md-4 plus">
                                            <div
                                                class="icon icon-shape bg-info text-white text-lg rounded-circle plus-out">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                    <path d="M5 11h14v2H5z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-4 col-12">
                                <div class="col-md-12">
                                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Live Stream</span>
                                </div>
                                <div class="card"
                                    style="box-shadow: 0 3px 3px -1px rgb(10 22 70 / 10%), 0 0 1px 2px rgb(10 22 70 / 6%) !important; margin-bottom: 10px">
                                    <a href="#">
                                        <div class="card-body" style="padding: 1rem !important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                style="margin-right: 15px;fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M18 9c0-1.103-.897-2-2-2h-1.434l-2.418-4.029A2.008 2.008 0 0 0 10.434 2H5v2h5.434l1.8 3H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-3l4 2v-7l-4 2V9zm-1.998 9H4V9h12l.001 4H16v1l.001.001.001 3.999z">
                                                </path>
                                                <path d="M6 14h6v2H6z"></path>
                                            </svg>
                                            <span class="h6 font-semibold text-muted text-sm  mb-2">Start Streaming</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="card"
                                    style="box-shadow: 0 3px 3px -1px rgb(10 22 70 / 10%), 0 0 1px 2px rgb(10 22 70 / 6%) !important; margin-bottom: 10px">
                                    <a href="#">
                                        <div class="card-body" style="padding: 1rem !important;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                style="margin-right: 15px;fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M18 7c0-1.103-.897-2-2-2H6.414L3.707 2.293 2.293 3.707l18 18 1.414-1.414L18 16.586v-2.919L22 17V7l-4 3.333V7zm-2 7.586L8.414 7H16v7.586zM4 19h10.879l-2-2H4V8.121L2.145 6.265A1.977 1.977 0 0 0 2 7v10c0 1.103.897 2 2 2z">
                                                </path>
                                            </svg>
                                            <span class="h6 font-semibold text-muted text-sm  mb-2">Stop Streaming</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 

                </div> --}}
                    <div class="col-xl-12">
                        <div class="card h-full">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-center">
                                    <h5 class="mb-0">Danh sách Trạm</h5>
                                    {{-- <div class="ms-auto text-end"><a href="#" class="text-sm font-semibold">See
                                        all</a></div> --}}
                                </div>
                                <div class="list-group gap-4">
                                    @if ($station)
                                        @foreach ($station as $item)
                                            <div class="list-group-item d-flex align-items-center border rounded">
                                                <a href="">
                                                    {{-- {{route('home.show',$item->id)}} --}}
                                                    <div class="me-4">
                                                        <div class="avatar rounded-circle">
                                                            <img alt="..." src="{{ asset('uploads/' . $item->image) }}">
                                                        </div>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="#"
                                                            class="d-block h6 font-semibold mb-1">{{ $item->name }}</a><span
                                                            class="d-block text-sm text-muted">{{ $item->address }}</span>
                                                    </div>
                                                    {{-- <div class="ms-auto text-end">
                                                    <div class="dropdown">
                                                        <a class="text-muted" href="#" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bi bi-three-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a href="#!" class="dropdown-item">Action</a>
                                                            <a href="#!" class="dropdown-item">Another action </a>
                                                            <a href="#!" class="dropdown-item">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                </a>

                                            </div>
                                        @endforeach
                                    @else
                                        <p>Bạn chưa đăng ký trạm nào!</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <style>
                    .time-local {
                        background: #fff;
                        z-index: 1;
                        width: 830px;
                        margin-left: 32.5%;
                        display: flex;
                        padding: 10px;
                        border: 1px solid rgb(0 0 0 / 21%);
                        position: absolute;
                        top: 66px;
                        left: 0px;
                        box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
                    }

                    .time-local label {
                        align-items: center;
                        display: flex;
                    }

                    .time-local-input {
                        display: flex;
                    }

                </style>
                <div class="row g-6 mb-6">
                    <div class="col-xl-8">
                        <div class="card" x-data="{open:false}" style="position: relative">
                            <div class="card-header border-bottom" style="display: flex;">
                                <h5 class="mb-0">Danh sách ảnh đã chụp </h5>

                                <div class="ms-auto text-end">
                                    <button @click.prevent="open = ! open" type="button"
                                        class="btn btn-sm px-3 btn-neutral d-flex align-items-center">
                                        <i class="bi bi-funnel me-2"></i>
                                        <span>Lọc Theo</span> <span class="vr opacity-20 mx-3"></span>
                                        <span class="text-xs text-primary">2</span>
                                    </button>
                                </div>

                            </div>
                            <form action="{{url('/')}}" method="GET">
                                <div style="display: none" x-show="open"
                                    class="time-local input-group input-group-inline datepicker ">
                                    <label for=""> Từ ngày - Đến ngày</label>
                                    <div class="time-local-input">
                                        <input style="margin-right: 10px;"  name="time_start"
                                            class="form-control flatpickr-input" value="{{$time_start}}" type="datetime-local">
                                        <input class="form-control flatpickr-input"  value="{{$time_end}}"  name="time_end" type="datetime-local">
                                        <button type="submit" class="btn btn-success"
                                            style="margin-left: 20px;padding: 13px 25px 0px 25px;display: flex;flex: none;">
                                            Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>STT</th>
                                            <th>Ảnh</th>
                                            <th scope="col">File ảnh</th>
                                            <th scope="col">Thời gian chụp</th>
                                            <th style=" justify-content: center;
                                                                align-items: center;
                                                                display: flex;
                                                            ">Tuỳ chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($image as $key => $val)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><img style="cursor:pointer"
                                                        @click="showImage('{{ asset('uploads/data_image/' . $val->name) }}')"
                                                        style="width:100px"
                                                        src="{{ asset('uploads/data_image/' . $val->name) }}" alt=""></td>
                                                <td>{{ Illuminate\Support\Str::limit($val->file_image, 50) }}</td>
                                                <td>{{ $val->timestart_capture }}</td>
                                                <td>
                                                    <div style="display: flex">
                                                        <a style="margin-right: 10px"
                                                            href="{{ asset('uploads/data_image/' . $val->name) }}"
                                                            class="btn btn-sm btn-square btn-neutral text-danger-hover"
                                                            download> <i class="bi bi-download"></i></a>
                                                        <form action="{{ route('media.destroy', $val->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit"
                                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                                <i class="bi bi-trash"></i></button>
                                                        </form>
                                                    </div>


                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card h-full">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-center">
                                    <h5 class="mb-0">Danh sách Trạm</h5>

                                    <div class="ms-auto text-end">
                                        @if (session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="list-group gap-4">
                                    @if ($station)
                                        @foreach ($station as $item)
                                            <div class="list-group-item d-flex align-items-center border rounded">
                                                <a href="{{ route('show_station', $item->id) }}">
                                                    {{--  --}}
                                                    <div class="me-4">
                                                        <div class="avatar rounded-circle">
                                                            <img alt="..." src="{{ asset('uploads/' . $item->image) }}">
                                                        </div>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <a href="{{ route('show_station', $item->id) }}"
                                                            class="d-block h6 font-semibold mb-1">{{ $item->name }}</a><span
                                                            class="d-block text-sm text-muted">Địa chỉ:
                                                            {{ $item->address }}</span>
                                                    </div>
                                                    <div class="ms-auto text-end">
                                                        <a @click.prevent="updateStation({{ $item->id }},'{{ $item->name }}','{{ $item->address }}')"
                                                            href="" class="btn btn-success">Sửa</a>
                                                    </div>
                                                </a>

                                            </div>
                                        @endforeach
                                    @else
                                        <p>Bạn chưa đăng ký trạm nào!</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (Auth::user()->quyen == 'admin')
                <div class="card">
                    <div class="card-header border-bottom">
                        <h5 class="mb-0">Danh sách log</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>STT</th>
                                    <th scope="col">Người dùng</th>
                                    <th scope="col">Trạm</th>

                                    <th scope="col">Data</th>
                                    <th scope="col">Thời gian log</th>
                                    <th scope="col">Code</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($log as $key => $val)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><a class="text-heading text-primary-hover font-semibold"
                                                href="#">{{ $val->user_id }}</a></td>
                                        <td>{{ $val->station_id }}</td>

                                        <td>{{ $val->data }}</td>
                                        <td>{{ $val->log_time }}</td>
                                        <td>{{ $val->code }}</td>
                                        {{-- <td class="text-end">
                                        <form action="{{route('log.destroy', $val->id)}}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i></button>
                                        </form>
    
                                    </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                {{-- <div class="card">
                    <div class="card-header border-bottom">
                        <h5 class="mb-0">Danh sách ảnh đã chụp</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>STT</th>
                                    <th scope="col">Tên ảnh</th>
                                    <th scope="col">File ảnh</th>
                                    <th scope="col">Thời gian chụp</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($image as $key => $val)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->file_image}}</td>
                                        <td>{{$val->timestart_capture}}</td>
                                        <td class="text-end">
                                            <form action="{{route('media.destroy', $val->id)}}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                    <i class="bi bi-trash"></i></button>
                                            </form>
        
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> --}}
            @endif

            <style>
                .modal-image {

                    position: absolute;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100vh;
                    background: rgba(0, 0, 0, 0.671);
                    z-index: 999;

                }

                .modal-update {

                    position: absolute;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100vh;
                    background: rgba(0, 0, 0, 0.671);
                    z-index: 999;
                    max-width: 100%;

                }

            </style>
            <div style="display: none" class="modal-image" x-show="show">
                <img style="display: block;margin: auto;" :src="showImageZoom" alt="" @click.outside="show = false">
            </div>
            <div class="container modal-update" style="display: none" x-show="showUpdateStation">
                <div class="row">
                    <div style="display: block;margin: auto;" @click.outside="showUpdateStation = false"
                        class="col-lg-4">
                        <div class="card position-sticky top-24">
                            <div class="card-body pb-0">
                                <form :action="'{{ url('station-update') }}/' + idStationUpdate" method="POST">
                                    @csrf

                                    <h4 style="text-align: center" class="mb-4">Sửa trạm</h4>
                                    <div>
                                        <div class="container-fluid max-w-screen-md vstack gap-5">
                                            <div>
                                                <label class="form-label">Tên trạm</label>
                                                <input type="text" class="form-control" x-model="nameStation" name="name">
                                            </div>
                                            <div>
                                                <label class="form-label">Địa chỉ trạm</label>
                                                <input class="form-control" x-model="addressStation" name="address">

                                            </div>
                                            <hr class="my-0">
                                            <div>

                                                <div class="hstack gap-3" style="float: right ">
                                                    <button type="submit" class="btn btn-success">Sửa </button>

                                                </div>
                                            </div>
                                            <hr class="my-0">

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </main>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('video', () => ({
                showUpdateStation: false,
                idStationUpdate: null,
                nameStation: null,
                addressStation: null,
                show: false,
                showImageZoom: null,
                showImage(image) {
                    this.show = true;
                    this.showImageZoom = image

                },
                updateStation(idStation, name, diachi) {
                    this.showUpdateStation = true;
                    this.nameStation = name;
                    this.addressStation = diachi;
                    this.idStationUpdate = idStation;
                    console.log(this.idStationUpdate, this.addressStation, this.nameStation);
                },
                // up() {

                // },
                // down() {

                // },
                // left() {

                // },
                // right() {

                // },
                getCapture() {
                    fetch('{{ url('camera/get-data-capture') }}')
                        .then(response => response.json())
                        .then(data => console.log(data));
                },

                async capture(idTram) {

                    try {
                        const res = await fetch('{{ url('camera/capture') }}', {
                            method: 'POST', // or 'PUT'

                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                _token: '{{ csrf_token() }}',
                                user: {{ Auth::user()->id }},
                                tram: idTram,
                                message: 'Test API Post capture',
                            }),
                        })
                        if (res.ok == false) {
                            throw new error('lỗi');
                        } else {
                            console.log(res.json());
                            this.getCapture();
                        }

                    } catch (error) {
                        console.log(error);
                    }

                },
                // startStreaming() {

                // },
                // stopStreaming() {

                // }
            }))
        })
    </script>
@endsection
