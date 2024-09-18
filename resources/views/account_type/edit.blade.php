@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">
            <div class="page-header">
                <h1>Account Type</h1>
            </div>
            <div class="row">

                <div class="col-md-9">
                    <div class="head clearfix">
                        <div class="isw-list"></div>
                        <h1>Account Type</h1>
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
                    <form action="{{ route('account_type.update', $account_type->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="block-fluid">

                            <div class="row-form clearfix">
                                <div class="col-md-5">Account Name:</div>
                                <div class="col-md-7">
                                    <select name="classification_id">
                                        <option value="{{ $account_type->classification_id }}">choose an account name...
                                        </option>
                                        @foreach ($classifications as $classification)
                                            <option value="{{ $classification->id }}"
                                                @if ($account_type->classification_id == $classification->id) selected @endif>
                                                {{ $classification->account_name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    @error('classification_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row-form clearfix">
                                <div class="col-md-5">Account Nubmer:</div>
                                <div class="col-md-7"><input type="text" value="{{ $account_type->account_number }}"
                                        placeholder="Account Number" name="account_number" />
                                    @error('account_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>

                            <div class="row-form clearfix">
                                <div class="col-md-5">Description:</div>
                                <div class="col-md-7"><input type="text" value="{{ $account_type->description }}"
                                        placeholder="Desciption" name="description" />
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>




                            <div class="row-form clearfix">
                                <div class="col-md-5">Financial Statement:</div>
                                <div class="col-md-7">
                                    <select name="financial_statement">
                                        <option value="">
                                            Please select financial
                                            statement...
                                        </option>


                                        <option value="balance_sheet" @if ($account_type->financial_statement == 'balance_sheet') selected @endif>
                                            Balance
                                            Sheet</option>
                                        <option value="profit_loss" @if ($account_type->financial_statement == 'profit_loss') selected @endif>Profit
                                            & Loss</option>


                                    </select>
                                    @error('financial_statement')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="footer tar">
                                
                                <button class="btn btn-default" type="submit">Update</button>
                            </div>

                        </div>
                    </form>
                </div>



            </div>

        </div>
    </div>
@endsection
