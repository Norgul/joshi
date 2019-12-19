@extends('layouts.v2.index')
@section('content')
    <style>
        .card {
            width: 18%;
            /* padding: 15px; */
            margin: 5px;
        }
        .icon-visits:before {
            font-size: 54px;
        }
        .dt-card{
            width: 100%;
        }
        .flex-1{
            padding-bottom: 14px;
        }

        th{
            text-align: center;
        }

    </style>



    <div class="row">

        <div class="card dt-card__full-height">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
                    <!-- Media -->
                    <div class="media flex-column align-items-center">

                        <span class="dt-avatar__outline size-80"><i
                                    class="icon icon-signup text-primary" style="font-size: 20px"></i></span>

                        <!-- Media Body -->
                        <div class="media-body">
                            <h2 class="display-3 font-weight-semibold mb-2 init-counter text-primary" >121</h2>
                            <span class="d-block text-light-gray">Subscribers today</span>
                        </div>
                        <!-- /media body -->

                    </div>
                    <!-- /media -->
                </div>
                <!-- /card body -->
        </div>

        <div class="card dt-card__full-height">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
                    <!-- Media -->
                    <div class="media flex-column align-items-center">

                        <span class="dt-avatar__outline size-80"><i
                                    class="icon icon-signup text-primary" style="font-size: 20px"></i></span>

                        <!-- Media Body -->
                        <div class="media-body">
                            <h2 class="display-3 font-weight-semibold mb-2 init-counter text-primary" >526</h2>
                            <span class="d-block text-light-gray">Subscribers 7 days</span>
                        </div>
                        <!-- /media body -->

                    </div>
                    <!-- /media -->
                </div>
                <!-- /card body -->
        </div>

        <div class="card dt-card__full-height">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
                    <!-- Media -->
                    <div class="media flex-column align-items-center">

                        <span class="dt-avatar__outline size-80"><i
                                    class="icon icon-user-o text-primary" style="font-size: 20px"></i></span>

                        <!-- Media Body -->
                        <div class="media-body">
                            <h2 class="display-3 font-weight-semibold mb-2 init-counter text-primary" >11,676</h2>
                            <span class="d-block text-light-gray">Subscribers Total</span>
                        </div>
                        <!-- /media body -->

                    </div>
                    <!-- /media -->
                </div>
                <!-- /card body -->
        </div>

        <div class="card dt-card__full-height">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
                    <!-- Media -->
                    <div class="media flex-column align-items-center">

                        <span class="dt-avatar__outline size-80"><i
                                    class="icon icon-visits icon-2x text-primary"></i></span>

                        <!-- Media Body -->
                        <div class="media-body">
                            <h2 class="display-3 font-weight-semibold mb-2 init-counter text-primary" >84%</h2>
                            <span class="d-block text-light-gray">Account CTR (30d)</span>
                        </div>
                        <!-- /media body -->

                    </div>
                    <!-- /media -->
                </div>
                <!-- /card body -->
        </div>

        <div class="card dt-card__full-height">
        <!-- Card Body -->
        <div class="dt-card__body text-center py-6 px-4">
                    <!-- Media -->
                    <div class="media flex-column align-items-center">

                        <span class="dt-avatar__outline size-80"><i
                                    class="icon icon-sent text-primary" style="font-size: 20px"></i></span>

                        <!-- Media Body -->
                        <div class="media-body">
                            <h2 class="display-3 font-weight-semibold mb-2 init-counter text-primary" >24</h2>
                            <span class="d-block text-light-gray">Scheduled Broadcasts</span>
                        </div>
                        <!-- /media body -->

                    </div>
                    <!-- /media -->
                </div>
                <!-- /card body -->
        </div>

    </div>

    <div class="row">

        <div class="card dt-card__full-height">
            <!-- Card Body -->
            <div class="dt-card__body text-center py-6 px-4">
                <!-- Media -->
                <div class="media flex-column align-items-center">

                        <span class="dt-avatar__outline size-80"><i
                                    class="icon icon-signup text-primary" style="font-size: 20px"></i></span>

                    <!-- Media Body -->
                    <div class="media-body">
                        <h2 class="display-3 font-weight-semibold mb-2 init-counter text-primary" >{{$emails_remaining->emails}}</h2>
                        <span class="d-block text-light-gray">Emails Reminder today</span>
                    </div>
                    <!-- /media body -->

                </div>
                <!-- /media -->
            </div>
            <!-- /card body -->
        </div>

    </div>

    <h3>Rececntly Sent Campaigns</h3>
    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                      x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>


    <h3>Top Performing Emails</h3>
    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>
                        x
                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    <div class="row" style="margin-top: 10px">
        <div class="dt-card">

            <!-- Card Body -->
            <div class="dt-card__body" style="width: 100%">

                <!-- List -->
                <div class="d-sm-flex flex-sm-row col-md-12">
                    <!-- Content -->
                    <div class="flex-1 overflow-hidden mb-6 mb-sm-0 pr-sm-3">
                        <div class="text-truncate">
                            <h4 class="d-inline-block mb-3 pr-4 mr-3 border-right">Joshua Brian</h4>
                            <p class="d-inline-block mb-3">Graphic Designer/ UI &amp; UX</p>
                        </div>
                        <p class="text-truncate text-light-gray">Cicero famously orated against his political opponent Lucius Sergius
                            Catilina...</p>
                        <div class="d-flex flex-sm-row flex-column">
                            <div class="mb-4 mb-sm-0">
                                <span class="mr-4 mr-md-6 text-nowrap">$35<span class="text-light-gray">/hr</span></span>
                                <span class="mr-4 mr-md-6 text-nowrap">$170k+ <span class="text-light-gray">earned</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- /content -->

                    <style>

                    </style>

                    <div class="min-w-120">

                        <table class="table" style="text-align: center">
                            <th><h3>54</h3> Opened</th>
                            <th><h3>23</h3>Clicked</th>
                            <th><h3>0</h3>Bounced</th>
                            <th><h3>0</h3>Complaints</th>
                        </table>

                    </div>

                </div>
                <!-- /list -->

            </div>
            <!-- /card body -->

        </div>
    </div>

    </div>
@endsection
