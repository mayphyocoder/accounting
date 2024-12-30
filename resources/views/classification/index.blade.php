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
                    <div class="block-fluid table-responsive mt-3">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr style="background-color: lightskyblue">
                                    <th width="5%" style="text-align: center;background-color: lightskyblue">ID</th>
                                    <th width="35%" style="text-align: center;background-color: lightskyblue">Account
                                        Name</th>
                                    <th width="15%" style="text-align: center;background-color: lightskyblue">Account
                                        Code</th>
                                    <th width="45%" style="text-align: center;background-color: lightskyblue">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classifications as $classification)
                                    <tr>
                                        <td width="5%" style="text-align: center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td width="35%" style="text-align: center">{{ $classification->account_name }}
                                        </td>
                                        <td width="15%" style="text-align: center">{{ $classification->account_code }}
                                        </td>
                                        <td width="45%" style="text-align: center">




                                            <form action="{{ route('classification.destroy', $classification->id) }}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf

                                                <a class="btn btn-info"
                                                    href="{{ route('classification.edit', $classification->id) }}">Edit</a>

                                                <a href="#" class="btn btn-danger del_confirm" id="confirm-text">
                                                    Delete
                                                </a>

                                                {{-- <button class="btn btn-danger" type="submit">Delete</button> --}}
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
