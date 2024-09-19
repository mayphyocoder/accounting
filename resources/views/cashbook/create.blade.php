@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">

            <div class="row">

                <div class="col-md-12">
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Cash Book Table</h1>
                        <ul class="buttons">
                            <li><a href="#" class="isw-download"></a></li>
                        </ul>
                    </div>
                    <br>
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Filter <span
                                class="caret"></span></button>
                        <ul class="dropdown-menu"
                            style="width: 300px; position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 40px);"
                            data-popper-placement="bottom-start">
                            {{-- <li>
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
                                </li> --}}

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

                            <div class="input-group" style="70px;">
                                <input id="appendedInputButton" class="form-control" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-info" type="button">Search</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br><br>
                    <form action="{{ route('cashbook.store') }}" method="post">
                        @csrf
                        <div class="block-fluid table-sorting clearfix">
                            <table cellpadding="0" cellspacing="0" width="100%" class="table">
                                <thead>
                                    <tr>

                                        <th width="15%"
                                            style="text-align: center; background-color:#76a9e0!important; color:white;">
                                            Date
                                        </th>

                                        <th width="25%"
                                            style="text-align: center; background-color:#76a9e0!important; color:white;">COA
                                            Account</th>

                                        <th width="20%"
                                            style="text-align: center; background-color:#76a9e0!important; color:white;">
                                            Bank &
                                            Cash Account</th>

                                        <th width="15%"
                                            style="text-align: center; background-color:#76a9e0!important; color:white;">
                                            Unit VR
                                        </th>

                                        <th width="10%"
                                            style="text-align: center; background-color:#76a9e0!important; color:white;">
                                            Debit
                                        </th>

                                        <th width="5%"
                                            style="text-align: center; background-color:#76a9e0!important; color:white;">
                                            Credit
                                        </th>

                                    </tr>
                                <tbody>

                                    <tr>
                                        <td>
                                            <input type="date" name="cashbook_date" value="" style="width: 100%;">
                                        </td>
                                        <td>
                                            <select name="coa_acc_type_id_1" id="s2_1" style="width: 100%;">
                                                <option value="">Please select...</option>
                                                @foreach ($chartof_accounts as $chartof_account)
                                                    <option value="{{ $chartof_account->coa_name ?? '' }}">

                                                        {{ $chartof_account->coa_number }}
                                                        {{ $chartof_account->coa_name }}

                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select name="coa_acc_type_id_2" id="s2_1" style="width: 100%;">
                                                <option value="">Please select...</option>
                                                @foreach ($chartof_accounts as $chartof_account)
                                                    @if ($chartof_account->account_type_id == 3 || $chartof_account->account_type_id == 4)
                                                        <option value="{{ $chartof_account->coa_name ?? '' }}">

                                                            {{ $chartof_account->coa_name }}


                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </td>

                                        <td>
                                            <input type="text" value="" placeholder="Unit Voucher"
                                                style="width: 100%;" name="voucher" />
                                        </td>
                                        <td>
                                            <input type="text" value="0" placeholder="0" style="width: 100%;"
                                                name="debit" />
                                        </td>
                                        <td>
                                            <input type="text" value="0" placeholder="0" style="width: 100%;"
                                                name="credit" />
                                        </td>

                                    </tr>



                                </tbody>
                                <tr>

                                    <th width="15%" colspan="2"
                                        style="text-align: center;background-color:#76a9e0!important; color:white;">
                                        Description
                                    </th>

                                    <th width="5%"
                                        style="text-align: center;background-color:#76a9e0!important; color:white;">Tax</th>

                                    <th width="5%"
                                        style="text-align: center;background-color:#76a9e0!important; color:white;">Currency
                                    </th>

                                    <th width="5%"
                                        style="text-align: center;background-color:#76a9e0!important; color:white;">Exchange
                                        Rate</th>

                                    <th width="45%"
                                        style="text-align: center;background-color:#76a9e0!important; color:white;">Total
                                    </th>

                                </tr>
                                <tbody>

                                    <tr>
                                        <td colspan="2">
                                            <input type="text" value="" placeholder="Description"
                                                style="width: 100%;" name="cashbook_description" />
                                        </td>

                                        <td>

                                            <select name="taxes" style="width: 100%;">
                                                <option value="">Please select Tax...</option>
                                                <option value="5">5%</option>
                                                <option value="10">10%</option>
                                                <option value="0">Other</option>


                                            </select>
                                        </td>

                                        <td>
                                            <select name="currency" style="width: 100%;">
                                                <option value="">Please select Currency...</option>
                                                <option value="MMK">MMK</option>
                                                <option value="USD">USD</option>
                                                <option value="Baht">Baht</option>
                                                <option value="VND">VND</option>


                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" value="0" placeholder="Rate" style="width: 100%;"
                                                name="rate" />
                                        </td>
                                        <td>
                                            <input type="text" value="" placeholder="Total"
                                                style="width: 100%;" name="total_amount" />
                                        </td>

                                    </tr>

                                </tbody>
                                </thead>

                            </table>
                            <div class="footer tar">
                                <a href="{{ route('chart_accounts.index') }}" class="btn btn-info"> Back </a>
                                <button class="btn btn-warning" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
