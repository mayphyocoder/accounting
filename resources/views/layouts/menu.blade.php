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
        {{-- Dashboard --}}
        <li class="active">
            <a href="">
                <span class="isw-grid"></span><span class="text">Dashboard</span>
            </a>
        </li>

        {{-- Job --}}
        <li class="openable" hidden>
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
        <li class="openable" hidden>
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
                    <a href="{{ route('cashbook.index') }}">
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
                    <a href="{{ route('profit_loss.index') }}">
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
                        <span class="glyphicon glyphicon-th-large"></span><span class="text">Bank & Cash
                            History</span>
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
                    <a href="{{ route('classification.index') }}">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Account Classification</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('account_type.index') }}">
                        <span class="glyphicon glyphicon-th"></span><span class="text">Account Type</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('chart_accounts.index') }}">
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
<div class="header">
    <a class="logo" href="{{ route('home') }}"><img src="{{ asset('assets/img/name.png') }}" alt=""
            title="May Phyo -  responsive admin panel" style="width:20%;margin-inline:35px;" /></a>
    <ul class="header_menu">
        <li class="list_icon"><a href="#">&nbsp;</a></li>
        <li class="settings_icon">
            <a href="{{ route('home') }}" class="link_themeSettings">&nbsp;</a>

            <div id="themeSettings" class="popup">
                <div class="head clearfix">
                    <div class="arrow"></div>
                    <span class="isw-settings"></span>
                    <span class="name">Theme settings</span>
                </div>
                <div class="body settings">
                    <div class="row">
                        <div class="col-md-3"><strong>Style:</strong></div>
                        <div class="col-md-9">
                            <a class="styleExample tip active" title="Default style" data-style="">&nbsp;</a>
                            <a class="styleExample silver tip" title="Silver style" data-style="silver">&nbsp;</a>
                            <a class="styleExample dark tip" title="Dark style" data-style="dark">&nbsp;</a>
                            <a class="styleExample marble tip" title="Marble style" data-style="marble">&nbsp;</a>
                            <a class="styleExample red tip" title="Red style" data-style="red">&nbsp;</a>
                            <a class="styleExample green tip" title="Green style" data-style="green">&nbsp;</a>
                            <a class="styleExample lime tip" title="Lime style" data-style="lime">&nbsp;</a>
                            <a class="styleExample purple tip" title="Purple style" data-style="purple">&nbsp;</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><strong>Background:</strong></div>
                        <div class="col-md-9">
                            <a class="bgExample tip active" title="Default" data-style="">&nbsp;</a>
                            <a class="bgExample bgCube tip" title="Cubes" data-style="cube">&nbsp;</a>
                            <a class="bgExample bghLine tip" title="Horizontal line" data-style="hline">&nbsp;</a>
                            <a class="bgExample bgvLine tip" title="Vertical line" data-style="vline">&nbsp;</a>
                            <a class="bgExample bgDots tip" title="Dots" data-style="dots">&nbsp;</a>
                            <a class="bgExample bgCrosshatch tip" title="Crosshatch"
                                data-style="crosshatch">&nbsp;</a>
                            <a class="bgExample bgbCrosshatch tip" title="Big crosshatch"
                                data-style="bcrosshatch">&nbsp;</a>
                            <a class="bgExample bgGrid tip" title="Grid" data-style="grid">&nbsp;</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><strong>Flat style:</strong></div>
                        <div class="col-md-9">
                            <a class="styleExample flat tip" title="Flat style" data-style="flat">&nbsp;</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><strong>Fixed layout:</strong></div>
                        <div class="col-md-9">
                            <input type="checkbox" name="settings_fixed" value="1" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><strong>Hide menu:</strong></div>
                        <div class="col-md-9">
                            <input type="checkbox" name="settings_menu" value="1" />
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <button class="btn btn-default link_themeSettings" type="button">Close</button>
                </div>
            </div>

        </li>
    </ul>
</div>
