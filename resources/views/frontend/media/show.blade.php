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
    <style>
      .time-local-1 {
          background: #fff;
          z-index: 1;
          width: 830px;
          margin-left: 32.5%;
          display: flex;
          padding: 10px;
          border: 1px solid rgb(0 0 0 / 21%);
          position: absolute;
          top: 60px;
          left: -325px;
          box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
      }

      .time-local-1 label {
          align-items: center;
          display: flex;
      }

      .time-local-input {
          display: flex;
      }

  </style>
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid px-xxl-16">
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h5 class="me-auto">Ảnh</h5>
                        
                    </div>
                    <div class="px-4 py-4 border-top border-bottom d-flex flex-column flex-sm-row gap-3" x-data="{open:false}">
                      <div>
                        <button @click.prevent="open = ! open" type="button" class="btn btn-sm px-3 btn-neutral d-flex align-items-center"><i
                                  class="bi bi-funnel me-2"></i> <span>Lọc ảnh</span> <span
                                  class="vr opacity-20 mx-3"></span> <span
                                  class="text-xs text-primary">2</span>
                        </button>
                        <form action="{{route('media.show',$idMonth)}}" method="GET">
                          <div style="display: none" x-show="open"
                              class="time-local-1 input-group input-group-inline datepicker ">
                              <label for=""> Từ ngày - Đến ngày</label>
                              <div class="time-local-input">
                                  <input style="margin-right: 10px;"  name="time_start"
                                      class="form-control flatpickr-input"  type="datetime-local">
                                  <input class="form-control flatpickr-input"    name="time_end" type="datetime-local">
                                  <button type="submit" class="btn btn-success"
                                      style="margin-left: 20px;padding: 13px 25px 0px 25px;display: flex;flex: none;">
                                      Tìm kiếm</button>
                              </div>
                          </div>
                      </form>
                      </div>
                       
                    </div>
                    <div class="table-responsive" x-data="media">
                        <table class="table table-hover table-nowrap">
                            <thead class="table-light">
                                <tr>
                                  <th>STT</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">File image</th>
                                    <th scope="col">Time Start Capture</th>
                                   
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $key => $val)
                                  <tr>
                                      <td>{{ $key + 1 }}</td>
                                      <td style="    width: 300px;"><img style="cursor:pointer;    max-width: 75%;"
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
                      </style>
                      <div style="display: none" class="modal-image" x-show="show">
                          <img style="display: block;margin: auto;" :src="showImageZoom" alt="" @click.outside="show = false">
                      </div>
                    </div>
                    <div class="card-footer border-0 py-5"><span class="text-muted text-sm">Showing 10 items out of 250
                            results found</span></div>
                </div>
            </div>
        </div>

    </main>
    <script>
      document.addEventListener('alpine:init', () => {
          Alpine.data('media', () => ({
              
              show: false,
              showImageZoom: null,
              showImage(image) {
                  this.show = true;
                  this.showImageZoom = image

              },
              

              
              
          }))
      })
  </script>
@endsection
