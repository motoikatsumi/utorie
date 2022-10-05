@extends('admin.layout')
@section('content')
    <div class="main-content-container container-fluid px-4">
        <div class="row mt20">
            <div class="col">
                <!-- MAIN BODY -->                
                <div class="card card-small mb-5">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">パスワードを変更する</h6>
                    </div>            
                    <div class="col-sm-12 col-md-6">
                        @include('admin.components.notify')                        
                        <form action="{{route('admin.changepw')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                            @csrf         
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="main-card mb-3  card">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <h4>パスワードを変更する</h4>
                                            </h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group mt-3">
                                                        <label for="current_password">以前のパスワード</label>
                                                        <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required
                                                            placeholder="現在のパスワードを入力してください">
                                                        @error('current_password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mt-3">
                                                        <label for="new_password ">新しいパスワード</label>
                                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required
                                                            placeholder="新しいパスワードを入力してください">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mt-3">
                                                        <label for="confirm_password">新しいパスワードを確認</label>
                                                        <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"required placeholder="新しいパスワードを再入力してください">
                                                        @error('confirm_password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                    
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-first mt-4 ml-2">
                                                    <button type="submit" class="btn btn-primary"
                                                        id="formSubmit">{{Config::get('define.actionButton.changePassword')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- /END MAIN BODY -->
@endsection
