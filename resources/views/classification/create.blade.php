@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="workplace">
            <div class="page-header">
                <h1>Accounts Classifications</h1>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="head clearfix">
                        <div class="isw-documents"></div>
                        <h1>Accounts Classifications</h1>
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
                    <form action="{{route('classification.store')}}" method="post">
                        @csrf
                    
 
                        <div class="block-fluid">

                            <div class="row-form clearfix">
                                <div class="col-md-3">Account Name:</div>
                                <div class="col-md-9"><input type="text" value="" placeholder="Account Name"
                                        name="account_name" />
                                        @error('account_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                                        
                            </div>
                             
                            
                            <div class="row-form clearfix">
                                <div class="col-md-3">Account Code:</div>
                                <div class="col-md-9"><input type="text" value="" placeholder="Account Code"
                                        name="account_code" />
                                        @error('account_code')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>


                            <div class="footer tar">
                                <button class="btn btn-default" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
