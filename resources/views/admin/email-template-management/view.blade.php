@extends('admin.include.layouts')
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    <form id="profile-update-form" method="post" action="{{route('admin.email.template.management.view',['id'=>base64_encode($view->id), 'page'=>request('page')])}}" novalidate>
                                        @csrf
                                        <div class="form-group row" style="margin: -12px;">
                                            <label class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <label>{{$view->title ?? ''}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin: -12px;">
                                            <label class="col-sm-2 col-form-label">Subject</label>
                                            <div class="col-sm-10">
                                                <label>{{$view->subject ?? ''}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin: -12px;">
                                            <label class="col-sm-2 col-form-label">Content</label>
                                            <div class="col-sm-10">
                                                <label>{!! $view->content ?? '' !!}</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12" style="text-align: center">
                        <a class="btn waves-effect waves-light btn-grd-primary" href="{{url('Kobe/email-template-management/list?page='.request('page'))}}">
                            <i class="fa fa-backward"></i>Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
