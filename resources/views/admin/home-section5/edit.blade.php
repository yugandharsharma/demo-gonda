@extends('admin.include.layouts')
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="form-group row">
                    <div class="col-md-12" style="margin-right: 873px;">
                        <a class="btn waves-effect waves-light btn-grd-primary" href="{{url('Kobe/screenshot-management/list?page='.request('page'))}}">
                            <i class="fa fa-backward"></i>Back
                        </a>
                    </div>
                </div>
                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    <form id="banner-management-edit-form" method="post" action="{{route('admin.home.section5.edit', ['id'=>base64_encode($edit->id), 'page'=>request('page')])}}" novalidate enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title" value="{{$edit->title ?? ''}}">
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <img src="{{asset('public/storage/uploads/home-section5/'.$edit->image ?? '')}}" style="width: 50px; height: 50px">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status</label>
                                            <div class="form-radio">
                                                <div class="col-sm-5 radio radio-outline radio-inline">
                                                    <label>
                                                        <input type="radio" name="status" id="active" value="1" {{$edit->status === 1 ? 'checked' : ''}}>
                                                        <i class="helper"></i>Active
                                                    </label>
                                                </div>
                                                <div class="col-sm-6 radio radio-outline radio-inline">
                                                    <label>
                                                        <input type="radio" name="status" id="inactive" value="0" {{$edit->status === 0 ? 'checked' : ''}}>
                                                        <i class="helper"></i>Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button class="btn waves-effect waves-light btn-grd-primary">Submit
                                                    <i class="fa fa-refresh fa-spin" style="display: none" id="spinner"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src={{ asset('public/challenge-validation/validation.js') }}></script>
@endsection
