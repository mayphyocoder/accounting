@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">
            <div class="row">

                <div class="col-md-12">
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Account Classification</h1>
                        <ul class="buttons">
                            <li><a href="#" class="isw-download"></a></li>
                            <li>
                                <a href="#" class="isw-settings"></a>
                                <ul class="dd-list">
                                    <li><a href="{{ route('classification.create') }}"><span class="isw-plus"></span>
                                            Create</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="25%">Account Name</th>
                                    <th width="25%">Account Code</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classifications as $classification)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>{{ $classification->account_name }}</td>
                                        <td>{{ $classification->account_code }}</td>
                                        <td>
                                            <a class="btn btn-info"
                                                href="{{ route('classification.edit', $classification->id) }}">Edit</a>

                                            <form action="{{ route('classification.destroy', $classification->id) }}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf

                                                <button class="btn btn-danger" type="submit">Delete</button>
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
