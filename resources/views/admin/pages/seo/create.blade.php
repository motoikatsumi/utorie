@extends('admin.layout',[
                'page_lang' => 'jp'
            ]
        )
@section('content')
    @if ($errors->any())
    {{-- Nếu có lỗi Validate --}}
    <div class="alert alert-warning w90 m0a center mb20">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container-fluid">
        <div class="panel" id="exampleReport">
        <div class="panel-body">
            <div class="panel-heading fsp">
            <h4 class="panel-title">SEO {{ isset($seo['id']) ? 'Edit' : "Create" }}</h4>
            </div>
            <div class="example-wrap">
            <div class="example">
                <div class="table-responsive tableform">
                <form 
                    autocomplete="off" 
                    enctype="multipart/form-data" 
                    method="post">

                    {{ csrf_field() }}
                    <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                        <tbody>
                            <tr>
                                <td>Page name (Route name)</td>
                                <td>
                                    <input type="text" class="form-control" name="page_name" value="{{ old('page_name', isset($seo['page_name']) ? $seo['page_name'] : "") }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Route URI</td>
                                <td>
                                    <input type="text" class="form-control" name="route" value="{{ old('route', isset($seo['route']) ? $seo['route'] : "") }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>
                                    <input type="text" class="form-control" name="title" value="{{ old('title', isset($seo['title']) ? $seo['title'] : "") }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>
                                    <input type="text" class="form-control" name="description" value="{{ old('description', isset($seo['description']) ? $seo['description'] : "") }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Keywords</td>
                                <td>
                                    <input type="text" class="form-control" name="keywords" value="{{ old('keywords', isset($seo['keywords']) ? $seo['keywords'] : "") }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Page status</td>
                                <td>
                                    <select name="page_status" class="form-control">
                                        <option value="1">Static</option>
                                        <option value="0">Dynamic</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Use home keywords and description</td>
                                <td>
                                    <select name="repeat_keyword_description" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>Is Index</td>
                                <td>
                                    <select name="is_index" class="form-control">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="center">
                        @if(isset($seo['id']))
                            <input class="btn btn-primary" name='save_new_seo' type="submit" value="{{Config::get('define.actionButton.save')}}">
                        @else
                            <input class="btn btn-primary" name='save_new_seo' type="submit" value="{{Config::get('define.actionButton.create')}}">
                        @endif
                    </div>
                    <a href="{{route('admin.seo.index')}}">
                    <i class="fa fa-angle-left mr5"></i>
                    Quay lại
                    </a>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
@section('append_foot')
    
@endsection
