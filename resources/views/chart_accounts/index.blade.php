@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">
            {{-- <div class="row">

                <div class="col-md-12">
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Chart of Accounts</h1>
                        <ul class="buttons">
                            <li><a href="#" class="isw-download"></a></li>
                            <li>
                                <a href="#" class="isw-settings"></a>
                                <ul class="dd-list">
                                    <li><a href="#"><span class="isw-plus"></span> Create</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>
                                    <th width="25%">ID</th>
                                    <th width="25%">Name</th>
                                    <th width="25%">E-mail</th>
                                    <th width="25%">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>101</td>
                                    <td>Dmitry</td>
                                    <td>dmitry@domain.com</td>
                                    <td>+98(765)432-10-98</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

            </div> --}}
            <div class="row">

                <div class="col-md-12">
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Chart of Accounts</h1>
                        <ul class="buttons">
                            <li><a href="#" class="isw-download"></a></li>
                            <li>
                                <a href="#" class="isw-settings"></a>
                                <ul class="dd-list">
                                    <li>
                                        <a href="{{ route('chart_accounts.create') }}"><span class="isw-plus"></span>
                                            Create
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" >
                            <thead>
                                <tr>
                                    
                                    <th width="5%">No.</th>
                                    <th width="25%">Account Type</th>
                                    <th width="25%">Code</th>
                                    <th width="25%">Account Name</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chartof_accounts as $chartof_account)
                                <tr>
                                    
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{$chartof_account->account_type_table->description}}
                                    </td>
                                    <td>
                                        {{$chartof_account->coa_number}}
                                    </td>
                                    <td>
                                        {{$chartof_account->coa_name}}
                                    </td>
                                    <td>
                                        <form action="{{ route('chart_accounts.destroy', $chartof_account->id) }}"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a class="btn btn-info"
                                                href="{{ route('chart_accounts.edit', $chartof_account->id) }}">Edit</a>

                                            <a href="#" class="btn btn-danger del_confirm" id="confirm-text">
                                                Delete
                                            </a>
                                            <a class="btn btn-info"
                                                href="{{ route('chart_accounts.show', $chartof_account->id) }}">Show</a>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
