<div class="menu">                

    <div class="breadLine">            
        <div class="arrow"></div>
        <div class="adminControl active">
            Hi, May Phyo
        </div>
    </div>

    <div class="admin">
        
            <li><span class="glyphicon glyphicon-share-alt"></span> 
                <a id="logout" class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                <i class='bx bx-log-out-circle'></i>
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        
        <div class="info">
            <span style="font-size: 18px">Welcome Accounting</span>
        </div>
    </div>

    <ul class="navigation">
        {{-- Dashboard--}}
        <li class="active">
            <a href="index.html">
                <span class="isw-grid"></span><span class="text">Dashboard</span>
            </a>
        </li>
        
        {{-- Job --}}
        <li class="openable">
            <a href="#">
                <span class="isw-list"></span><span class="text">Job</span>
            </a>
            <ul>
                <li>
                    <a href="ui.html">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Job Category</span>
                    </a>                  
                </li>          
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Job Order</span>
                    </a>                  
                </li> 
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Job Apply</span>
                    </a>                  
                </li> 
                                    
            </ul>                
        </li>
       

        {{-- Labor --}}
        <li class="openable">
            <a href="#">
                <span class="isw-list"></span><span class="text">Labor</span>
            </a>
            <ul>
                <li>
                    <a href="ui.html">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Advance Invoice</span>
                    </a>                  
                </li>          
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Actual Invoice</span>
                    </a>                  
                </li> 
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Labors' AR</span>
                    </a>                  
                </li> 

                <li>
                    <a href="ui.html">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Labor List</span>
                    </a>                  
                </li> 
                                    
            </ul>                
        </li>

        

         {{-- Accounting --}}
         <li class="openable">
            <a href="#">
                <span class="isw-list"></span><span class="text">Accounting</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('cashbook.index')}}">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Cashbook</span>
                    </a>                  
                </li>          
                <li>
                    <a href="">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Journal Entries</span>
                    </a>                  
                </li> 
                
                                    
            </ul>                
        </li>

         {{-- Reporting --}}
         <li class="openable">
            <a href="#">
                <span class="isw-list"></span><span class="text">Reporting</span>
            </a>
            <ul>
                <li>
                    <a href="ui.html">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Profit & Loss</span>
                    </a>                  
                </li>
                <li>
                    <a href="ui.html">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Balance Sheet</span>
                    </a>                  
                </li>          
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Aged Receivable</span>
                    </a>                  
                </li> 
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Aged Payable</span>
                    </a>                  
                </li>
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">General Ledger</span>
                    </a>                  
                </li> 
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Tri Balance</span>
                    </a>                  
                </li> 
                
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Bank & Cash History</span>
                    </a>                  
                </li> 
                
                                    
            </ul>                
        </li>
        
        {{-- Cofiguration --}}
        <li class="openable">
            <a href="#">
                <span class="isw-list"></span><span class="text">Configuration</span>
            </a>
            <ul>
                <li>
                    <a href="{{route('classification.index')}}">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Account Classification</span>
                    </a>                  
                </li> 
                <li>
                    <a href="{{route('account_type.index')}}">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Account Type</span>
                    </a>                  
                </li>

                <li>
                    <a href="{{route('chart_accounts.index')}}">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Chart of Accounts</span>
                    </a>                  
                </li>          
                <li>
                    <a href="">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Bank and Cash</span>
                    </a>                  
                </li> 
                                    
            </ul>                
        </li>
        {{-- Note --}}
        <li class="openable">
            <a href="#">
                <span class="isw-list"></span><span class="text">Note</span>
            </a>
            <ul>
                <li>
                    <a href="ui.html">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Create Note</span>
                    </a>                  
                </li>          
                <li>
                    <a href="widgets.html">
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Note</span>
                    </a>                  
                </li> 
                                    
            </ul>                
        </li>
        {{-- Document --}}
        <li class="openable">
            <a href="#">
                <span class="isw-list"></span><span class="text">Document</span>
            </a>          
        </li>

                      
                                
    </ul>

    

</div>