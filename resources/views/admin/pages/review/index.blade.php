@extends('admin.layout')

@section('content')
<div class="main-content-container container-fluid px-4">
    <div class="panel">
        @include('admin.components.notify')
        <div class="panel-body">
            <div class="panel-heading fsp">
                <h1 class="panel-title">口コミ一覧</h1>
            </div>
            <div class="table-responsive">
                <table class="table table-hover tablelist" data-role="content" data-plugin="selectable" data-row-selectable="true">
                    <thead class="bg-blue-grey-100">
                        <tr>
                            <th class="w80px center">ID</th>
                            <th class="center">会社</th>
                            <th class="center">お名前</th>
                            <th class="center">投稿日</th>
                            <th class="center">総合評価</th>
                            <th class="center">価格</th>
                            <th class="center">パフォーマンス</th>
                            <th class="center">提案能力</th>
                            <th class="center">自由選択</th>
                            <th class="center">メンテナンス_サポート</th>
                            <th class="w60px center">状態</th>
                            <th class="w70px center">編集</th>
                            <th class="w70px center">削除</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ dd($reviews) }} --}}
                        @foreach ($reviews as $review)
                        <tr>
                            <td class="center">
                                <a href="{{ route('review.edit',$review->id) }}">
                                    <button class="btn btn-secondary" type="button">{{ $review->id }}</button>
                                </a>
                            </td>
                            <td class="center">{{ $review->company->company_name }}</td>
                            <td class="center">{{ $review->nickname }}</td>
                            <td class="center">{{ !is_null($review->created_at) ? date_format($review->created_at, 'Y/m/d') : ''}}</td>
                            {{-- <td class="center">{{ ((int)$review->price + (int)$review->performance + (int)$review->proposal_ability + (int)$review->free_choice + (int)$review->maintenance_support)/5 }}</td> --}}
                            <td class="center">{{ $review->satisfaction }}</td>
                            <td class="center">{{ $review->price }}</td>
                            <td class="center">{{ $review->performance }}</td>
                            <td class="center">{{ $review->proposal_ability }}</td>
                            <td class="center">{{ $review->free_choice }}</td>
                            <td class="center">{{ $review->maintenance_support }}</td>
                            <td class="center">{{ $review->review_show == 1 ? '表示' : '非表示'}}</td>
                            <td class="center">
                                <a class="btn btn-outline-warning" href="{{ route('review.edit',$review->id) }}">
                                    <span>{{Config::get('define.actionButton.edit')}}</span>
                                </a>
                            </td>                            
                            <td class="center">
                                <form method="post" action="{{route('review.delete', $review->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-outline-danger" name="delete" value="{{Config::get('define.actionButton.delete')}}">
                                    <input type="hidden" name="id" value="{{ $review->id }}">
                                    <input type="hidden" name="action" value="delete_brand">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>                
            {!! $reviews->appends(request()->input())->links('admin.components.pagination') !!}
        </div>
    </div>
</div>
@endsection