<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="<?php $url->to(''); ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="<?php $url->to('index2'); ?>?p=index2"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="label label-primary pull-right">4</span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php $url->to(''); ?>?layout=top-nav"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="<?php $url->to(''); ?>?layout=layout-boxed"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="<?php $url->to(''); ?>?layout=fixed"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="<?php $url->to(''); ?>?layout=sidebar-collapse_fixed"><i class="fa fa-circle-o"></i> Collapsed
                    Sidebar</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php $url->to('widgets'); ?>?p=widgets">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <small class="label pull-right bg-green">new</small>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php $url->to('morris'); ?>?p=morris"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?php $url->to('flot'); ?>?p=flot"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php $url->to('charts-inline'); ?>?p=charts"><i class="fa fa-circle-o"></i> Inline charts</a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php $url->to('ui-general'); ?>?p=ui-general"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="<?php $url->to('ui-icons'); ?>?p=ui-icons"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="<?php $url->to('ui-buttons'); ?>?p=ui-buttons"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="<?php $url->to('ui-sliders'); ?>?p=sliders"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="<?php $url->to('ui-timeline'); ?>?p=ui-timeline"><i class="fa fa-circle-o"></i> Timeline</a>
            </li>
            <li><a href="<?php $url->to('ui-modals'); ?>?p=ui-modals"><i class="fa fa-circle-o"></i> Modals</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php $url->to('forms-general'); ?>?p=forms-general"><i class="fa fa-circle-o"></i> General
                    Elements</a></li>
            <li><a href="<?php $url->to('forms-advanced'); ?>?p=forms-advanced"><i class="fa fa-circle-o"></i> Advanced
                    Elements</a></li>
            <li><a href="<?php $url->to('forms-editors'); ?>?p=forms-editors"><i class="fa fa-circle-o"></i> Editors</a>
            </li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php $url->to('tables-simple'); ?>?p=tables-simple"><i class="fa fa-circle-o"></i> Simple
                    tables</a></li>
            <li><a href="<?php $url->to('tables-data'); ?>?p=tables-data"><i class="fa fa-circle-o"></i> Data tables</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="<?php $url->to('calendar'); ?>?p=calendar">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right bg-red">3</small>
        </a>
    </li>
    <li>
        <a href="<?php $url->to('mailbox'); ?>?p=mailbox">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right bg-yellow">12</small>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php $url->to('example-invoices'); ?>?p=invoices"><i class="fa fa-circle-o"></i> Invoice</a>
            </li>
            <li><a href="<?php $url->to('example-login'); ?>?p=login"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="<?php $url->to('example-register'); ?>?p=register"><i class="fa fa-circle-o"></i> Register</a>
            </li>
            <li><a href="<?php $url->to('example-lockscreen'); ?>?p=lockscreen"><i class="fa fa-circle-o"></i>
                    Lockscreen</a></li>
            <li><a href="<?php $url->to('example-404'); ?>?p=404"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="<?php $url->to('example-500'); ?>?p=500"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="<?php $url->to('example-blank'); ?>?p=blank"><i class="fa fa-circle-o"></i> Blank Page</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
                <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
    </li>
    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
    <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
    <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>
</ul>