@extends('admin.layout.master')

@section('content')

    <link rel="{{asset('public/stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="{{asset('public/stylesheet" href="vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="{{asset('public/stylesheet" href="vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="{{asset('public/stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="{{asset('public/stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="{{asset('public/stylesheet" href="assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header">
                                <strong>{{$pagename}}</strong>
                            </div>
                            <div class="card-body card-block">


                            @if($errors->any())

                                <div class="alert alert-danger">
                                    <div class="list-group">
                                        @foreach($errors->all() as $error)
                                        <li class="list-group-item">
                                            {{$error}}
                                        </li>
                                        @endforeach
                                    </div>
                                </div>

                            @endif

                                <form action="{{route('roles.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama User</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtnama_users" placeholder="Text" class="form-control"><small class="form-text text-muted">Isi Nama user Anda</small></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email User</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="txtemail_users" placeholder="Text" class="form-control"><small class="form-text text-muted">Isi Nama user Anda</small></div>
                                    </div>
                                        
                                        
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Role</label></div>
                                            <div class="col-12 col-md-9">
                                            <select name="optionid_role" id="select" class="form-control">
                                            @foreach($allRoles as $role)

                                            <option value={{$role->id}}>
                                                {{$role -> name}}
                                            </option>

                                            @endforeach                                            
                                                    <!-- <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option> -->
                                            </select>
                                         </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                    </button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- .Animated -->
            </div><!-- .content -->

                            <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
                            <script src="{{asset('public/vendors/popper.js/dist/umd/popper.min.js')}}"></script>

                            <script src="{{asset('public/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
                            <script src="{{asset('public/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

                            <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                            <script src="{{asset('public/assets/js/main.js')}}"></script>
@endsection