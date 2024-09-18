@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">
            <div class="page-header">
                <h1>Chart Of Accounts Show</h1>
            </div>
            <div class="row">

                <div class="col-md-9">
                    <div class="head clearfix">
                        <div class="isw-list"></div>
                        <h1>Chart of Account Detail</h1>
                    </div>


                    <div class="block-fluid">
                        

                        <h5 style="margin: 10px;font-weight:bold;">
                            Account Classification Info
                        </h5>
                        <div class="row-form clearfix">
                            <div class="col-md-5">Account Name</div>
                            <div class="col-md-7">
                                {{ $chartof_account->account_type_table->classification_table->account_name }}
                            </div>
                        </div>
                        
                        <div class="row-form clearfix">
                            <div class="col-md-5">Account Code</div>
                            <div class="col-md-7">
                                {{ $chartof_account->account_type_table->classification_table->account_code }}
                            </div>
                        </div>

                        <h5 style="margin: 10px;font-weight:bold;">
                            Account Type Info
                        </h5>

                        
                        <div class="row-form clearfix">
                            <div class="col-md-5">Account Type</div>
                            <div class="col-md-7">
                                {{ $chartof_account->account_type_table->description }}
                            </div>
                        </div>

                        <div class="row-form clearfix">
                            <div class="col-md-5">Financial Statement</div>
                            <div class="col-md-7">
                                {{ $chartof_account->account_type_table->financial_statement }}
                            </div>
                        </div>
                        <h5 style="margin: 10px;font-weight:bold;">
                            COA Info
                        </h5>

                        <div class="row-form clearfix">
                            <div class="col-md-5">Account Code</div>
                            <div class="col-md-7">

                                {{ $chartof_account->coa_number }}
                            </div>
                        </div>
                        <div class="row-form clearfix">
                            <div class="col-md-5">Account Name</div>
                            <div class="col-md-7">
                                {{ $chartof_account->coa_name }}

                            </div>
                        </div>

                        <div class="footer tar">
                            <a href="{{ route('chart_accounts.index') }}" class="btn btn-info"> Back </a>

                        </div>

                    </div>
                    </form>
                </div>



            </div>

        </div>
    </div>
@endsection
