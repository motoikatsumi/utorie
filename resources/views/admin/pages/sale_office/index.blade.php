@extends('admin.layout')

@section('content')
<div class="main-content-container container-fluid px-4">
    <div class="panel">
        @include('admin.components.notify')
        <div class="panel-body">
            <div class="panel-heading fsp">
                <h1 class="panel-title">営業所一覧</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-hover tablelist" data-role="content" data-plugin="selectable" data-row-selectable="true">
                    <thead class="bg-blue-grey-100">
                        <tr>
                            <th class="w80px center">ID</th>
                            <th>会社ID</th>
                            <th>会社名</th>
                            <th>営業所名</th>
                            <th>住所</th>
                            <!-- <th class="w100px center">電話番号</th> -->
                            <th class="w70px center">{{Config::get('define.actionButton.edit')}}</th>
                            <th class="w70px center">{{Config::get('define.actionButton.delete')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offices as $office)
                        <tr>
                            <td class="w60px center">
                                <a href="{{ route('office.edit',$office->id) }}">
                                    <button class="btn btn-secondary" type="button">{{ $office->id }}</button>
                                </a>
                            </td>
                            <th>
                                <a href="{{ route('company.edit',$office->companies->id) }}">
                                    <button class="btn btn-secondary" type="button">{{ $office->companies->id }}</button>
                                </a>
                            </th>
                            <th>{{ $office->companies->company_name }}</th>
                            <td>{{ $office->name }}</td>
                            <!-- <td>
                                @if($office->prefs)
                                    {{ $office->prefs->name }}
                                @endif
                            </td> -->
                            <td>{{ $office->address }}</td>
                            <!-- <td class="center">{{ $office->tel }}</td> -->
                            <td class="center">
                                <a class="btn btn-outline-warning" href="{{ route('office.edit',$office->id) }}">
                                    <span>{{Config::get('define.actionButton.edit')}}</span>
                                </a>
                            </td>
                            <td class="center">
                                <form method="post" action="{{route('office.delete', $office->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-outline-danger" name="delete" value="{{Config::get('define.actionButton.delete')}}">
                                    <input type="hidden" name="id" value="{{ $office->id }}">
                                    <input type="hidden" name="action" value="delete_brand">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>                
            {!! $offices->appends(request()->input())->links('admin.components.pagination') !!}
        </div>
    </div>
</div>
@endsection