@extends('layouts.main')
@section('content')
    <div class="content" hidden>
        <div class="workplace">
            <div class="row ">
                <div class="page-header">
                    <h1>Profit And Loss </h1>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="head clearfix">
                            <div class="col-md-6">
                                <div class="isw-grid"></div>
                                <h1>Profit & Loss Table</h1>
                            </div>

                        </div>


                        <br>
                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Filter <span
                                    class="caret"></span></button>
                            <ul class="dropdown-menu"
                                style="width: 300px; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 40px);"
                                data-popper-placement="bottom-start">
                                <li>
                                    <form action="" method="get" style="padding: 5px; padding-left: 20px;">
                                        <input class="form-control" type="hidden" name="from" value="2024-09-01">
                                        <input class="form-control" type="hidden" name="to" value="2024-09-30">
                                        <input type="submit" value="This Month">
                                    </form>
                                </li>

                                <li>
                                    <form action="" method="get" style="padding: 5px; padding-left: 20px;">
                                        <input class="form-control" type="hidden" name="from" value="2024-08-01">
                                        <input class="form-control" type="hidden" name="to" value="2024-08-31">
                                        <input type="submit" value="Last Month">
                                    </form>
                                </li>

                                <li>
                                    <form action="" method="get" style="padding: 5px; padding-left: 20px;">
                                        <input class="form-control" type="hidden" name="from" value="2024-01-01">
                                        <input class="form-control" type="hidden" name="to" value="2024-12-31">
                                        <input type="submit" value="Current Year">
                                    </form>
                                </li>

                                <li>
                                    <form action="" method="get" style="padding: 5px; padding-left: 20px;">
                                        <input class="form-control" type="hidden" name="from" value="2023-01-01">
                                        <input class="form-control" type="hidden" name="to" value="2023-12-31">
                                        <input type="submit" value="Last Year">
                                    </form>
                                </li>

                                <div class="dropdown-divider"></div>

                                <li>
                                    <form action="" method="get" style="padding: 20px;">
                                        <div class="form-group">
                                            <small>Start Date</small>
                                            <input class="form-control" type="date" name="from" required="">
                                        </div>
                                        <div class="form-group">
                                            <small>End Date</small>
                                            <input class="form-control" type="date" name="to" required="">
                                        </div>
                                        <br>
                                        <button class="btn btn-primary btn-sm pd-x-20">Search</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="widget">

                                <div class="input-group" style="width:190px;">
                                    <input id="appendedInputButton" class="form-control" type="text">
                                    <div class="input-group-btn">
                                        <button class="btn btn-info" type="button">Search</button>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="block-fluid table-responsive mt-3">
                            <table cellpadding="0" cellspacing="0" width="100%" class="table">
                                <thead>
                                    <tr style="background-color: lightskyblue">
                                        <th width="15%" style="text-align: center;background-color: lightskyblue">
                                            ID
                                        </th>
                                        <th width="45%" style="text-align: center;background-color: lightskyblue">
                                            Account
                                            Name</th>
                                        <th width="45%" style="text-align: center;background-color: lightskyblue">
                                            Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1.
                                        </td>
                                        <td>

                                        </td>
                                        <td style="text-align: right">
                                            20000
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <div class="content">
        <div class="workplace">


            <div class="page-header">
                <h1>Profit & Loss </h1>
            </div>
            <div class="btn-group ">

                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Filter <span
                        class="caret"></span></button>
                <ul class="dropdown-menu"
                    style="width: 300px; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 40px);"
                    data-popper-placement="bottom-start">
                    <li>
                        <form action="" method="get" style="padding: 5px; padding-left: 20px;">
                            <input class="form-control" type="hidden" name="from" value="2024-09-01">
                            <input class="form-control" type="hidden" name="to" value="2024-09-30">
                            <input type="submit" value="This Month">
                        </form>
                    </li>

                    <li>
                        <form action="" method="get" style="padding: 5px; padding-left: 20px;">
                            <input class="form-control" type="hidden" name="from" value="2024-08-01">
                            <input class="form-control" type="hidden" name="to" value="2024-08-31">
                            <input type="submit" value="Last Month">
                        </form>
                    </li>

                    <li>
                        <form action="" method="get" style="padding: 5px; padding-left: 20px;">
                            <input class="form-control" type="hidden" name="from" value="2024-01-01">
                            <input class="form-control" type="hidden" name="to" value="2024-12-31">
                            <input type="submit" value="Current Year">
                        </form>
                    </li>

                    <li>
                        <form action="" method="get" style="padding: 5px; padding-left: 20px;">
                            <input class="form-control" type="hidden" name="from" value="2023-01-01">
                            <input class="form-control" type="hidden" name="to" value="2023-12-31">
                            <input type="submit" value="Last Year">
                        </form>
                    </li>

                    <div class="dropdown-divider"></div>

                    <li>
                        <form action="" method="get" style="padding: 20px;">
                            <div class="form-group">
                                <small>Start Date</small>
                                <input class="form-control" type="date" name="from" required="">
                            </div>
                            <div class="form-group">
                                <small>End Date</small>
                                <input class="form-control" type="date" name="to" required="">
                            </div>
                            <br>
                            <button class="btn btn-primary btn-sm pd-x-20">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="widget">

                    <div class="input-group" style="width:200px;">
                        <input id="appendedInputButton" class="form-control" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-info" type="button">Search</button>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row">

                <div class="col-md-12">

                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            {{-- Incomes  --}}
                            <thead>
                                <tr>

                                    <th width="" style="text-align: center;background-color:#587ba1;color:white">#
                                    </th>
                                    <th width="" style="text-align: center;background-color:#587ba1;color:white;">
                                        Account Name
                                    </th>
                                    <th width="" style="text-align: center; background-color:#587ba1;color:white;">
                                        Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total_incomes_balance = [];
                                @endphp
                                @foreach ($income_accounts as $income_account)
                                    <tr>
                                        <td style="text-align: center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td style="text-align: left">

                                            <div class="dropdown ">

                                                <a data-toggle="dropdown" class="dropdown-toggle" href="">
                                                    {{ $income_account->coa_number }}
                                                    {{ $income_account->coa_name }}
                                                    <span class="caret"></span></a>
                                                <ul class="dropdown-menu" data-popper-placement="bottom-start"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 20px);">


                                                    {{-- <div class="dropdown-divider"></div> --}}

                                                    <li>
                                                        <div class="form-group">
                                                            <span style="font-size:14px; margin:10px;">
                                                                <a
                                                                    href="{{ route('cashbook_detail.show', $income_account->id) }}">
                                                                    Cashbook
                                                                </a>
                                                            </span>
                                                        </div>

                                                        <div class="form-group">
                                                            <span style="font-size:14px; margin:10px;">
                                                                <a href="">General Ledger</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td style="text-align: right">
                                            @php
                                                $total_income = [];
                                            @endphp
                                            @foreach ($income_account->cashbook_table as $cashbook)
                                                @php
                                                    $total_income[] += $cashbook->total_amount;
                                                @endphp
                                            @endforeach
                                            @php
                                                $total_incomes = array_sum($total_income);
                                                $total_incomes_balance[] += $total_incomes;

                                                echo number_format($total_incomes, 2);
                                            @endphp
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <tr>
                                <td colspan="2" style="text-align:center;font-weight:bold;"> Total
                                    Incomes Balance

                                </td>
                                <td style="text-align: right; ">
                                    @php
                                        $total_incomes_balance = array_sum($total_incomes_balance);
                                        echo number_format($total_incomes_balance, 2);
                                    @endphp
                                </td>
                            </tr>
                            {{-- Expenses  --}}
                            <thead>
                                <tr>

                                    <th width="" style="text-align: center;background-color:#587ba1;color:white">#
                                    </th>
                                    <th width="" style="text-align: center;background-color:#587ba1;color:white;">
                                        Account Name
                                    </th>
                                    <th width="" style="text-align: center; background-color:#587ba1;color:white;">
                                        Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total_expenses_balance = [];
                                @endphp
                                @foreach ($expense_accounts as $expense_account)
                                    <tr>
                                        <td style="text-align: center">
                                            {{ $loop->iteration }}
                                        </td>

                                        <td style="text-align: left">
                                            <div class="dropdown ">

                                                <a data-toggle="dropdown" class="dropdown-toggle" href="">
                                                    {{ $expense_account->coa_number }}
                                                    {{ $expense_account->coa_name }}
                                                    <span class="caret"></span></a>
                                                <ul class="dropdown-menu" data-popper-placement="bottom-start"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 20px);">
                                                    <li>
                                                        <div class="form-group">
                                                            <span style="font-size:14px;">
                                                                <a href="">Cashbook</a>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <span style="font-size:14px;">
                                                                <a href="">General Ledger</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td style="text-align: right">
                                            @php
                                                $total_expense = [];
                                            @endphp
                                            @foreach ($expense_account->cashbook_table as $cashbook)
                                                @php
                                                    $total_expense[] += $cashbook->total_amount;
                                                @endphp
                                            @endforeach
                                            @php
                                                $total_expenses = array_sum($total_expense);
                                                $total_expenses_balance[] += $total_expenses;

                                                echo number_format($total_expenses, 2);
                                            @endphp
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <tr>
                                <td colspan="2" style=" text-align:center;font-weight:bold;"> Total
                                    Expenses Balance

                                </td>
                                <td style="text-align: right; ">
                                    @php
                                        $total_expenses_balance = array_sum($total_expenses_balance);
                                        echo number_format($total_expenses_balance, 2);
                                    @endphp
                                </td>
                            </tr>
                            @php
                                $net_profit = $total_incomes_balance - $total_expenses_balance;

                            @endphp
                            @if ($net_profit > 0)
                                <tr>

                                    <td colspan="2" style=" text-align:center; background-color:#677C12;color:white">
                                        Net
                                        Profit: </td>

                                    <td style="text-align: right; background-color:#677C12;color:white">
                                        @php

                                            echo number_format($net_profit, 2);
                                        @endphp
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="2" style=" text-align:center; background-color:red;color:white"> Net
                                        Loss:</td>

                                    <td style="text-align: right; background-color:red;color:white">
                                        @php

                                            echo number_format($net_profit, 2);
                                        @endphp
                                    </td>
                                </tr>
                            @endif
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
