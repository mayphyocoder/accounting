@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">
            <div class="page-header">
                <h1>Chart Of Accounts Table</h1>
            </div>
            <div class="row">

                <div class="col-md-9">
                    <div class="head clearfix">
                        <div class="isw-list"></div>
                        <h1>Chart of Accounts</h1>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('chart_accounts.store') }}" method="post">

                        @csrf
                        <div class="block-fluid">

                            {{-- <div class="row-form clearfix">
                            <div class="col-md-5">Account Name:</div>
                            <div class="col-md-7">
                                <select name="classification_id">
                                    <option value="">choose an account name...</option>
                                    @foreach ($classifications as $classification)
                                        <option value="{{ $classification->id }}">{{ $classification->account_name }}
                                        </option>
                                    @endforeach
                                    
                                </select>
                                @error('classification_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div> --}}
                            <div class="row-form clearfix">
                                <div class="col-md-5">Account Type</div>
                                <div class="col-md-7">
                                    <select name="account_type_id" id="s2_1" style="width: 100%;">
                                        <option value="">Please select...</option>
                                        @foreach ($classifications as $classification)
                                            <optgroup label="{{ $classification->account_name ?? '' }}">
                                                @foreach ($classification->account_type_table as $account_type)
                                                    <option value="{{ $account_type->id }}">
                                                        {{ $account_type->description }}
                                                    </option>
                                                @endforeach


                                            </optgroup>
                                        @endforeach
                                    </select>
                                    @error('account_type')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row-form clearfix">
                                <div class="col-md-5">Code Number:</div>
                                <div class="col-md-7"><input type="text" value="" placeholder="Code"
                                        name="coa_number" />
                                    @error('coa_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                            <div class="row-form clearfix">
                                <div class="col-md-5">Account Name:</div>
                                <div class="col-md-7"><input type="text" value="" placeholder="Account Name"
                                        name="coa_name" />
                                    @error('coa_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>


                            <div class="footer tar">
                                <a href="{{ route('chart_accounts.index') }}" class="btn btn-info"> Back </a>
                                <button class="btn btn-default" type="submit">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>



            </div>

        </div>
    </div>
@endsection
