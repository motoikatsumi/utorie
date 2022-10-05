@extends('admin.layout',[
                'page_lang' => 'jp'
            ]
        )

@section('content')
@include('admin.components.notify')
<div class="container-fluid">
    <div class="panel" id="exampleReport">
        <div class="panel-body">
            <div class="panel-heading fsp">
                <h4 class="panel-title">こだわりポイント</h4>
            </div>
            <form method="post">
                @csrf
                <div class="fss mt20">
                    <button type="submit" class="btn btn-outline-info">
                        {{Config::get('define.actionButton.update')}} <i class="fa fa-save ml5"></i>
                    </button>
                </div>
                <div class="example-wrap">
                    <div class="example">
                        <div class="table-responsive tableform"  style="max-width: 100%">
                            <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true" style="table-layout: fixed">
                                <thead class="bg-blue-grey-100">
                                    <tr>
                                        <th class="w50px center">ID</th>
                                        <th class="center" width="60">Genre ID</th>
                                        <th width="95">Title</th>
                                        <th width="150">Sticking Point</th>
                                        <th>Supplement Text</th>
                                        {{-- <th>補足テキスト</th> --}}
                                        {{-- <th>Display Name (Select Ttem)</th> --}}
                                        {{-- <th>ブレッドクラム</th> --}}
                                        <th>Display Name (Breadcrumbs)</th>
                                        <th>Display Name (Title/H2)</th>
                                        <th width="70" class="center">Column<br>(SP)</th>
                                        <th width="70" class="center">Sup<br>text</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stickingPoints as $key => $stickingPoint)
                                        <tr>
                                            <td class="center">{{$stickingPoint->id}}<input class='form-control' type="hidden" name="sticking[{{$stickingPoint->id}}][id]" value="{{$stickingPoint->id}}"></td>
                                            <td class="center">{{$stickingPoint->genre->id}}</td>
                                            <td>{{$stickingPoint->GenreCat->name}}</td>
                                            <td><textarea rows="2" class='form-control' type="text" name="sticking[{{$stickingPoint->id}}][name]" value="">{{$stickingPoint->name}}</textarea></td>
                                            <td><textarea rows="2" class='form-control' type="text" name="sticking[{{$stickingPoint->id}}][supplement_text]" value="">{{$stickingPoint->supplement_text}}</textarea></td>
                                            {{-- <td><textarea rows="2" class='form-control' type="text" name="sticking[{{$stickingPoint->id}}][select_item]" value="">{{$stickingPoint->select_item}}</textarea></td> --}}
                                            <td><textarea rows="2" class='form-control' type="text" name="sticking[{{$stickingPoint->id}}][breadcrumb]" value="">{{$stickingPoint->breadcrumb}}</textarea></td>
                                            <td><textarea rows="2" class='form-control' type="text" name="sticking[{{$stickingPoint->id}}][title_h1]" value="">{{$stickingPoint->title_h1}} </textarea></td>
                                            <td class="w100px">
                                                <select class="viewtype form-control" data-catid={{$stickingPoint->GenreCat->id}} name="sticking[{{$stickingPoint->id}}][view_type]">
                                                    <option {{ $stickingPoint->view_type == 1 ? 'selected' : '' }} value="1">1</option>
                                                    <option {{ $stickingPoint->view_type == 2 ? 'selected' : '' }} value="2">2</option>
                                                </select>
                                            </td>
                                            <td class="w100px">
                                                <select class="issup form-control" data-catid={{$stickingPoint->GenreCat->id}} name="sticking[{{$stickingPoint->id}}][is_sup]">
                                                    <option {{ $stickingPoint->is_sup == 0 ? 'selected' : '' }} value="0">No</option>
                                                    <option {{ $stickingPoint->is_sup == 1 ? 'selected' : '' }} value="1">Yes</option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>         
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('append_foot')
    <script>
        $('.viewtype').on('change', function(){
            var stickcat = $(this).data('catid');
            var currentVal = $(this).find('option:selected').val();
            $('select.viewtype[data-catid="'+stickcat+'"]').attr('readonly', true);
            $('select.viewtype[data-catid="'+stickcat+'"]').first().attr('readonly', false);
            $('select.viewtype[data-catid="'+stickcat+'"]').find('option[value="'+currentVal+'"]').prop('selected', true);
        });
        $('.issup').on('change', function(){
            var stickcat = $(this).data('catid');
            var currentVal = $(this).find('option:selected').val();
            $('select.issup[data-catid="'+stickcat+'"]').attr('readonly', true);
            $('select.issup[data-catid="'+stickcat+'"]').first().attr('readonly', false);
            $('select.issup[data-catid="'+stickcat+'"]').find('option[value="'+currentVal+'"]').prop('selected', true);
        });
    </script>
@endsection