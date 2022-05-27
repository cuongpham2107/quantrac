<nav
    class="navbar navbar-light position-lg-sticky top-lg-0 d-none d-lg-block overlap-10 flex-none bg-white border-bottom px-0 py-3"
    id="topbar">
    <div class="container-fluid">
        <form class="form-inline ms-auto me-4 d-none d-md-flex">
            <div class="input-group input-group-inline shadow-none"><span
                    class="input-group-text border-0 shadow-none ps-0 pe-3"><i class="bi bi-search"></i>
                            </span><input type="text" class="form-control form-control-flush" placeholder="Search"
                                          aria-label="Search"></div>
        </form>
        <div class="navbar-user d-none d-sm-block">
            <div class="hstack gap-3 ms-4">
                <div class="dropdown"><a href="#"
                                         class="nav-link px-3 text-base text-muted text-opacity-70 text-opacity-100-hover"
                                         id="dropdown-notifications" data-bs-toggle="dropdown"
                                         aria-expanded="false"><i
                            class="bi bi-bell-fill"></i></a>
                    <div class="dropdown-menu dropdown-menu-end px-2"
                         aria-labelledby="dropdown-notifications">
                        <div class="dropdown-item d-flex align-items-center">
                            <h6 class="dropdown-header p-0 m-0 font-semibold">Notifications</h6><a href="#"
                                                                                                   class="text-sm font-semibold ms-auto">Clear
                                all</a>
                        </div>
                        <div class="dropdown-item py-3 d-flex">
                            <div>
                                <div class="avatar bg-tertiary text-white rounded-circle">RF</div>
                            </div>
                            <div class="flex-fill ms-3">
                                <div class="text-sm lg-snug w-64 text-wrap"><a href="#"
                                                                               class="font-semibold text-heading text-primary-hover">Robert</a>
                                    sent a message to <a href="#"
                                                         class="font-semibold text-heading text-primary-hover">Webpixels</a>
                                </div>
                                <span class="text-muted text-xs">30 mins ago</span>
                            </div>
                        </div>
                        <div class="dropdown-item py-3 d-flex">
                            <div><img alt="..." src="{{asset('assets/img/people/img-1.jpg')}}"
                                      class="avatar rounded-circle">
                            </div>
                            <div class="flex-fill ms-3">
                                <div class="text-sm lg-snug w-64 text-wrap"><a href="#"
                                                                               class="font-semibold text-heading text-primary-hover">Robert</a>
                                    sent a message to <a href="#"
                                                         class="font-semibold text-heading text-primary-hover">Webpixels</a>
                                </div>
                                <span class="text-muted text-xs">30 mins ago</span>
                            </div>
                        </div>
                        <div class="dropdown-item py-3 d-flex">
                            <div><img alt="..." src="{{asset('assets/img/people/img-2.jpg')}}"
                                      class="avatar rounded-circle">
                            </div>
                            <div class="flex-fill ms-3">
                                <div class="text-sm lg-snug w-64 text-wrap"><a href="#"
                                                                               class="font-semibold text-heading text-primary-hover">Robert</a>
                                    sent a message to <a href="#"
                                                         class="font-semibold text-heading text-primary-hover">Webpixels</a>
                                </div>
                                <span class="text-muted text-xs">30 mins ago</span>
                            </div>
                        </div>
                        <div class="dropdown-item py-3 d-flex">
                            <div>
                                <div class="avatar bg-success text-white rounded-circle">KW</div>
                            </div>
                            <div class="flex-fill ms-3">
                                <div class="text-sm lg-snug w-64 text-wrap"><a href="#"
                                                                               class="font-semibold text-heading text-primary-hover">Robert</a>
                                    sent a message to <a href="#"
                                                         class="font-semibold text-heading text-primary-hover">Webpixels</a>
                                </div>
                                <span class="text-muted text-xs">30 mins ago</span>
                            </div>
                        </div>
                        <div class="dropdown-item py-3 d-flex">
                            <div><img alt="..." src="{{asset('assets/img/people/img-4.jpg')}}"
                                      class="avatar rounded-circle">
                            </div>
                            <div class="flex-fill ms-3">
                                <div class="text-sm lg-snug w-64 text-wrap"><a href="#"
                                                                               class="font-semibold text-heading text-primary-hover">Robert</a>
                                    sent a message to <a href="#"
                                                         class="font-semibold text-heading text-primary-hover">Webpixels</a>
                                </div>
                                <span class="text-muted text-xs">30 mins ago</span>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-item py-2 text-center"><a href="#"
                                                                       class="font-semibold text-muted text-primary-hover">View
                                all</a></div>
                    </div>
                </div>
                <div class="dropdown"><a class="d-flex align-items-center" href="#" role="button"
                                         data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        
                        <div class="d-none d-sm-block ms-3"><span class="h6">{{Auth::user()->name}}</span></div>
                        <div class="d-none d-md-block ms-md-2"><i
                                class="bi bi-chevron-down text-muted text-xs"></i></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        {{-- <div class="dropdown-header"><span class="d-block text-sm text-muted mb-1">Signed in
                                            as</span> <span class="d-block text-heading font-semibold">Tahlia
                                            Mooney</span></div>

                        <div class="dropdown-divider"></div> --}}
                        <form action="{{route('logout')}}" method="POST">
                            @csrf

                            <a href="route('logout')"
                               onclick="event.preventDefault();
                                            this.closest('form').submit();"
                               class="dropdown-item">
                                <i class="bi bi-person me-3"></i>Đăng xuất
                            </a>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
