@extends('admin.layout',[
                'page_lang' => 'jp'
            ]
        )
@section('append_head')
<link href="{{ asset('vendor/pagination/pagination.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
@if (session('status'))
    <div class="alert alert-success w90 m0a center mb20">
        {{ session('status') }}
    </div>
@endif
<div class="container-fluid">
    <div class="panel" id="exampleReport">
        <div class="panel-body">
            <div class="panel-heading fsp">
                <h4 class="panel-title">Users</h4>
                <div class="panel-actions fce">
                    <a href={{route('admin.user.store')}} class="ml20 btn btn-outline-info addnew">
                        Add new <i class="fa fa-plus ml5"></i>
                    </a>
                </div>
            </div>
            <div class="listroles">
                <ul>
                    <li>
                        <a class="@if($roleid == null) active @endif" href="{{route('admin.user')}}">All ({{$total}})</a>
                    </li>
                    @foreach ($roles as $role)
                        <li>
                            <a class="@if($role->id == $roleid) active @endif" href="{{route('admin.user')}}?roleid={{$role->id}}">{{$role->name}} ({{$role->users_count}})</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="changeroles panel-actions">
                <h4>Change User Roles</h4>
                <div class="fsc">
                    <form class="fsc" action="{{route('admin.user')}}" method="POST">
                        @csrf
                        @foreach ($all_roles as $role)
                        <label class="mr10"><input type="checkbox" data-slug="{{$role->slug}}" value="{{$role->id}}" name="roles[]"> {{$role->name}}</label>
                        @endforeach
                        <input type="hidden" name="user_id[]" id="userid">
                        <button class="btn btn-outline-info" type="submit" name="apply_role"><span>Apply roles</span></button>
                    </form>
                </div>
            </div>
            <div class="example-wrap">
                <div class="example">
                    <div class="table-responsive">
                        <table class="table table-hover tablelist" data-role="content" data-plugin="selectable" data-row-selectable="true">
                        <thead class="bg-blue-grey-100">
                            <tr>
                                <th class="center checkbox">
                                    <span class="checkbox-custom checkbox-primary">
                                        <input class="selectable-all" type="checkbox">
                                      </span>
                                </th>
                                <th class="w40px center">
                                    Name
                                </th>
                                <th class="w20px center">
                                    Email
                                </th>
                                <th class="w80px center">
                                    Roles
                                </th>
                                <th class="w80px center">
                                    Permission
                                </th>
                                <th class="w60px center">
                                    Edit
                                </th>
                                <th class="w60px center">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="center checkbox">
                                    <span class="checkbox-custom checkbox-primary">
                                        <input class="selectable-item" name="{{$user->id}}" type="checkbox">
                                    </span>
                                </td>
                                <td class="center">
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>
                                    @if ($user->roles)
                                        @foreach ($user->roles as $role)
                                            <p>
                                                <span class="{{ $role->slug }} label label_role">{{ $role->name }}</span>
                                            </p>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    @if ($user->roles)
                                        @foreach ($user->roles as $role)
                                            <p class="p_permission">
                                                @foreach(collect($role->permissions)->unique('name') as $permission)
                                                <span>{{ $permission->name }}</span>
                                                @endforeach
                                            </p>
                                        @endforeach
                                    @endif
                                </td>
                                <td class="center w20px">
                                    <form method="post" action="./edit.php">
                                        <input type="submit" class="btn btn-outline-warning" name="edit" value="Edit" />
                                        <input type="hidden" name="id" value="<?=$user->id?>" />
                                        <input type="hidden" name="action" value="edit_user" />
                                    </form>
                                </td>
                                <td class="center">
                                    <form method="post" action="./delete.php">
                                        <input type="submit" class="btn btn-outline-danger" name="delete" value="Delete">
                                        <input type="hidden" name="id" value="<?=$user->id?>">
                                        <input type="hidden" name="action" value="delete_user">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>

                        <nav>
                            @if ($users->hasPages())
                                <ul class="pagination">
                                    @if ($users->onFirstPage())
                                        <li class="page-item disabled"><span class="page-link">«</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $users->previousPageUrl() }}" rel="prev">«</a></li>
                                    @endif

                                    @if($users->currentPage() > 3)
                                        <li class="page-item hidden-xs"><a class="page-link" href="{{ $users->url(1) }}">1</a></li>
                                    @endif
                                    @if($users->currentPage() > 4)
                                        <li class="page-item"><span class="page-link">...</span></li>
                                    @endif
                                    @foreach(range(1, $users->lastPage()) as $i)
                                        @if($i >= $users->currentPage() - 2 && $i <= $users->currentPage() + 2)
                                            @if ($i == $users->currentPage())
                                                <li class="page-item active" aria-current="page"><span class="page-link">{{ $i }}</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a></li>
                                            @endif
                                        @endif
                                    @endforeach
                                    @if($users->currentPage() < $users->lastPage() - 3)
                                        <li class="page-item"><span class="page-link">...</span></li>
                                    @endif
                                    @if($users->currentPage() < $users->lastPage() - 2)
                                        <li class="hidden-xs page-item"><a class="page-link" href="{{ $users->url($users->lastPage()) }}">{{ $users->lastPage() }}</a></li>
                                    @endif

                                    {{-- Next Page Link --}}
                                    @if ($users->hasMorePages())
                                        <li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}" rel="next">»</a></li>
                                    @else
                                        <li class="page-item disabled"><span class="page-link">»</span></li>
                                    @endif
                                </ul>
                            @endif
                        </nav>
                        {{-- {{ $users->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('append_foot')
    <script src="{{ asset('vendor/pagination/pagination.min.js') }}"></script>
    <script src="{{ asset('js/common.js') }}" defer></script>
@endsection
