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
                        <h1>Cash Book Table</h1>
                        <ul class="buttons">
                            <li><a href="#" class="isw-download"></a></li>
                            <li>
                                <a href="#" class="isw-settings"></a>
                                <ul class="dd-list">
                                    <li>
                                        <a href="{{ route('cashbook.create') }}"><span class="isw-plus"></span>
                                            Create
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="block-fluid table-sorting clearfix">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>

                                    <th width="">No.</th>
                                    <th width="">Date</th>
                                    <th width="">COA Account</th>
                                    <th width="">Bank/Cash</th>
                                    <th width="">VR</th>
                                    <th width="">Description</th>
                                    <th width="">Debit</th>
                                    <th width="">Credit</th>
                                    <th width="">Currency</th>
                                    <th width="70px">EX Rate</th>
                                    <th width="">Total Amount</th>
                                    <th width="">Action</th>
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


                                        <td>
                                            @php
                                                echo number_format($cashbook->debit, 2 ?? 0);
                                                $total_debit[] += $cashbook->debit;
                                            @endphp
                                        </td>
                                        <td>
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

                                        <td>
                                            {{-- <form action="{{ route('cashbook.destroy', $cashbook->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a class="btn btn-info"
                                                    href="{{ route('cashbook.edit', $cashbook->id) }}">Edit</a>

                                                <a href="#" class="btn btn-danger del_confirm" id="confirm-text">
                                                    Delete
                                                </a>

                                            </form> --}}
                                            <form action="{{ route('cashbook.destroy', $cashbook->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <div class="btn-group">
                                                    <button data-toggle="dropdown"
                                                        class="btn btn-default btn-warning dropdown-toggle">Action <span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{ route('cashbook.edit', $cashbook->id) }}">Edit</a>
                                                        </li>
                                                        <li>
                                                            {{-- <a href="#">Delete </a> --}}
                                                            <a href="#" class="del_confirm" id="confirm-text">
                                                                Delete
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </form>
                                        </td>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" style="text-align: center">Total</td>
                                    <td>
                                        @php
                                            $total_debit = array_sum($total_debit);
                                            echo number_format($total_debit, 2);

                                        @endphp
                                    </td>
                                    <td>
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
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
