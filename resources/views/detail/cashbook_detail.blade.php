@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">
            <div class="page-header">
                <h1>Cashbook </h1>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>Cash Book Detail Table</h1>

                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>

                                    <th>No.</th>
                                    <th>Date</th>
                                    <th width="230px";>COA Account</th>
                                    <th>Bank/Cash</th>
                                    <th>VR</th>
                                    <th>Description</th>
                                    <th>Debit</th>
                                    <th>Credit</th>
                                    <th>Currency</th>
                                    <th width="70px">EX Rate</th>
                                    <th>Total Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total_balance = [];
                                    $total_debit = [];
                                    $total_credit = [];
                                @endphp
                                @foreach ($cashbooks as $cashbook)
                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>
                                            {{ $cashbook->cashbook_date }}
                                        </td>
                                        <td>
                                            {{ $cashbook->coa_table1->coa_name ?? '-' }}
                                        </td>
                                        <td>
                                            {{ $cashbook->coa_table2->coa_name ?? '-' }}
                                        </td>

                                        <td>
                                            {{ $cashbook->voucher }}
                                        </td>
                                        <td>
                                            {{ $cashbook->cashbook_description }}
                                        </td>


                                        <td style="text-align: right">
                                            @php
                                                echo number_format($cashbook->debit, 2 ?? 0);
                                                $total_debit[] += $cashbook->debit;
                                            @endphp
                                        </td>
                                        <td style="text-align: right">
                                            @php
                                                echo number_format($cashbook->credit, 2 ?? 0);
                                                $total_credit[] += $cashbook->credit;
                                            @endphp
                                        </td>

                                        <td style="text-align: center">
                                            {{ $cashbook->currency }}
                                        </td>

                                        <td style="text-align: center">
                                            {{ $cashbook->rate }}
                                        </td>

                                        <td style="text-align: right">
                                            @php
                                                echo number_format($cashbook->total_amount, 2);
                                                $total_balance[] += $cashbook->total_amount;
                                            @endphp
                                        </td>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" style="text-align: center">Total</td>
                                    <td style="text-align: right">
                                        @php
                                            $total_debit = array_sum($total_debit);
                                            echo number_format($total_debit, 2);

                                        @endphp
                                    </td>
                                    <td style="text-align: right">
                                        @php
                                            $total_credit = array_sum($total_credit);
                                            echo number_format($total_credit, 2);

                                        @endphp
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: right">
                                        @php
                                            $total_balance = array_sum($total_balance);
                                            echo number_format($total_balance, 2);
                                        @endphp
                                    </td>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
