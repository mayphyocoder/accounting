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
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" >
                            <thead>
                                <tr>
                                    
                                    <th width="5%">No.</th>
                                    <th width="25%">Account Type</th>
                                    <th width="25%">Code</th>
                                    <th width="25%">Account Name</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    
                                    <td>
                                        dd
                                    </td>
                                    <td>
                                        ss
                                    </td>
                                    <td>
                                        aa
                                    </td>
                                    <td>
                                        hh
                                    </td>
                                    <td>
                                        
                                            <a class="btn btn-info"
                                                href="">Edit</a>

                                            <a href="#" class="btn btn-danger del_confirm" id="confirm-text">
                                                Delete
                                            </a>
                                            <a class="btn btn-info"
                                                href="">Show</a>
                                        
                                    </td>
                                </tr>

                                

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
