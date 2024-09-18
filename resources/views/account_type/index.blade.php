@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">
            <div class="page-header">
                <h1>Account Type </h1>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Account Type</h1>
                        <ul class="buttons">

                            <li>
                                <a href="#" class="isw-settings"></a>
                                <ul class="dd-list">
                                    <li><a href="{{ route('account_type.create') }}"><span class="isw-plus"></span>
                                            Create</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="10%">Account Classification </th>
                                    <th width="15%">Account Number</th>
                                    <th width="25%">Account Description</th>
                                    <th width="20%">Financial Statement</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($account_types as $account_type)
                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}

                                        </td>

                                        <td>
                                            {{ $account_type->classification_table->account_name ?? '' }}
                                            

                                        </td>
                                        <td>{{ $account_type->account_number }}</td>
                                        <td>{{ $account_type->description }}</td>
                                        <td>{{ $account_type->financial_statement }}</td>

                                        <td>
                                            <form action="{{ route('account_type.destroy', $account_type->id) }}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a class="btn btn-info"
                                                    href="{{ route('account_type.edit', $account_type->id) }}">Edit</a>

                                                <a href="#" class="btn btn-danger del_confirm" id="confirm-text">
                                                    Delete
                                                </a>
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
