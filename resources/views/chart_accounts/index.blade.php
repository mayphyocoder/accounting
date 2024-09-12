@extends('layouts.main')
@section('content')

<div class="row">

    <div class="col-md-12">                    
        <div class="head clearfix">
            <div class="isw-grid"></div>
            <h1>Simple table</h1>      
            <ul class="buttons">
                <li><a href="#" class="isw-download"></a></li>                                                        
                <li><a href="#" class="isw-attachment"></a></li>
                <li>
                    <a href="#" class="isw-settings"></a>
                    <ul class="dd-list">
                        <li><a href="#"><span class="isw-plus"></span> New document</a></li>
                        <li><a href="#"><span class="isw-edit"></span> Edit</a></li>
                        <li><a href="#"><span class="isw-delete"></span> Delete</a></li>
                    </ul>
                </li>
            </ul>                        
        </div>
        <div class="block-fluid">
            <table cellpadding="0" cellspacing="0" width="100%" class="table">
                <thead>
                    <tr>                                    
                        <th width="25%">ID</th>
                        <th width="25%">Name</th>
                        <th width="25%">E-mail</th>
                        <th width="25%">Phone</th>                                    
                    </tr>
                </thead>
                <tbody>
                    <tr>                                    
                        <td>101</td>
                        <td>Dmitry</td>
                        <td>dmitry@domain.com</td>
                        <td>+98(765)432-10-98</td>                                    
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Alex</td>
                        <td>alex@domain.com</td>
                        <td>+98(765)432-10-99</td>                                    
                    </tr>
                    <tr>
                        <td>103</td>
                        <td>John</td>
                        <td>john@domain.com</td>
                        <td>+98(765)432-10-97</td>                                    
                    </tr>
                    <tr>
                        <td>104</td>
                        <td>Angelina</td>
                        <td>angelina@domain.com</td>
                        <td>+98(765)432-10-90</td>                                    
                    </tr>
                    <tr>
                        <td>105</td>
                        <td>Tom</td>
                        <td>tom@domain.com</td>
                        <td>+98(765)432-10-92</td>                                    
                    </tr>                                
                </tbody>
            </table>
        </div>
    </div>                                

</div> 
    
@endsection