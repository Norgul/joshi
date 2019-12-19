<main class="dt-main">


    <!-- Sidebar -->
    <aside id="main-sidebar" class="dt-sidebar">
        <div class="dt-sidebar__container">

            <!-- Sidebar Navigation -->
            <ul class="dt-side-nav">
                <!-- Menu Item -->
                <li class="dt-side-nav__item">
                    <a href="{{url('/')}}" class="dt-side-nav__link" title="Basic Form"> <i
                                class="icon icon-dashboard icon-fw icon-xl"></i>
                        <span class="dt-side-nav__text">Dashboard</span> </a>
                </li>

                <li class="dt-side-nav__item">
                    <a href="{{url('/email_reminder')}}" class="dt-side-nav__link" title="Basic Form"> <i
                                class="icon icon-email icon-fw icon-xl"></i>
                        <span class="dt-side-nav__text">Email Reminder</span> </a>
                </li>


                <li class="dt-side-nav__item">
                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                        <i class="icon icon-all-contacts icon-fw icon-xl"></i> <span class="dt-side-nav__text">Lists</span> </a>

                    <!-- Sub-menu -->
                    <ul class="dt-side-nav__sub-menu">
                        <li class="dt-side-nav__item">
                            <a href="{{url('/lists')}}" class="dt-side-nav__link" title="Basic Table">
                                <span class="dt-side-nav__text">Manage Lists</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="{{url('/lists_subscribers')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Subscribers</span> </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="{{url('/tag/lists')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Tag Manager</span> </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="{{url('/blacklists')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Suppression</span> </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">List Cleaner</span> </a>
                        </li>
                    </ul>

                    <!-- /sub-menu -->
                </li>
                <li class="dt-side-nav__item">
                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                        <i class="icon icon-sent icon-fw icon-xl"></i> <span class="dt-side-nav__text">Campaigns</span> </a>

                    <!-- Sub-menu -->
                    <ul class="dt-side-nav__sub-menu">
                        <li class="dt-side-nav__item">
                            <a href="{{url('/campaigns')}}" class="dt-side-nav__link" title="Basic Table">
                                <span class="dt-side-nav__text">Broadcasts</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="{{url('/automations')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Autoresponders</span> </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Media Library</span> </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Stock Images</span> </a>
                        </li>
                    </ul>

                    <!-- /sub-menu -->
                </li>


                <li class="dt-side-nav__item">
                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                        <i class="icon icon-feedback icon-fw icon-xl"></i> <span class="dt-side-nav__text">Forms</span> </a>

                    <!-- Sub-menu -->
                    <ul class="dt-side-nav__sub-menu">
                        <li class="dt-side-nav__item">
                            <a href="{{url('/new_form')}}" class="dt-side-nav__link" title="Basic Table">
                                <span class="dt-side-nav__text">Library</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="{{url('/spinner')}}" class="dt-side-nav__link" title="Tables">
                                <span class="dt-side-nav__text">Article Spinner</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="{{url('/spam-word-scanner')}}" class="dt-side-nav__link " title="Tables">
                                 <span class="dt-side-nav__text">Spam Detector</span>
                            </a>
                        </li>


                        <li class="dt-side-nav__item">
                            <a href="{{url('/new_form')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Create</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Integrate</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="#" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">TD Pages</span> </a>
                        </li>
                    </ul>

                    <!-- /sub-menu -->
                </li>

                <li class="dt-side-nav__item">
                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                        <i class="icon icon-tasks icon-fw icon-xl"></i> <span class="dt-side-nav__text">Automation</span> </a>

                    <!-- Sub-menu -->
                    <ul class="dt-side-nav__sub-menu">
                        <li class="dt-side-nav__item">
                            <a href="{{url('/automations/create')}}" class="dt-side-nav__link" title="Basic Table">
                                <span class="dt-side-nav__text">Create</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="{{url('/automations')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">View Automations</span> </a>
                        </li>
                    </ul>

                    <!-- /sub-menu -->
                </li>

{{--                <li class="dt-side-nav__item">--}}
{{--                    <a href="{{url('/spinner')}}" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">--}}
{{--                        <i class="icon icon-drag-and-drop icon-fw icon-xl"></i> <span class="dt-side-nav__text">Article Spinner</span> </a>--}}
{{--                </li>--}}

                <li class="dt-side-nav__item">
                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                        <i class="icon icon-drag-and-drop icon-fw icon-xl"></i> <span class="dt-side-nav__text">Templates</span> </a>

                    <!-- Sub-menu -->
                    <ul class="dt-side-nav__sub-menu">
                        <li class="dt-side-nav__item">
                            <a href="{{url('/templates')}}" class="dt-side-nav__link" title="Basic Table">
                                <span class="dt-side-nav__text">Library</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="{{url('/templates/build/select')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Create</span> </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="{{url('/templates/upload')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Integrate</span> </a>
                        </li>
                    </ul>

                    <!-- /sub-menu -->
                </li>
                <li class="dt-side-nav__item">
                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                        <i class="icon icon-setting icon-fw icon-xl"></i> <span class="dt-side-nav__text">Sender Settings</span> </a>

                    <!-- Sub-menu -->
                    <ul class="dt-side-nav__sub-menu">
                        <li class="dt-side-nav__item">
                            <a href="{{url('/senders')}}" class="dt-side-nav__link" title="Basic Table">
                                <span class="dt-side-nav__text">Sending Servers</span> </a>
                        </li>

                        <li class="dt-side-nav__item">
                            <a href="{{url('/sending_domains')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Sending Domain</span> </a>
                        </li>
                        <li class="dt-side-nav__item">
                            <a href="{{url('/sending_servers')}}" class="dt-side-nav__link" title="Data Table">
                                <span class="dt-side-nav__text">Server Settings</span> </a>
                        </li>
                    </ul>

                    <!-- /sub-menu -->
                </li>

                <li class="dt-side-nav__item">
                    <a href="{{url('/purge')}}" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                        <i class="icon icon-trash icon-fw icon-xl"></i> <span class="dt-side-nav__text">Purge</span> </a>

                </li>

                <li class="dt-side-nav__item">
                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow" title="Tables">
                        <i class="icon icon-info icon-fw icon-xl"></i> <span class="dt-side-nav__text">Support and Tutorials</span> </a>

                </li>

            </ul>
            <!-- /sidebar navigation -->

        </div>
    </aside>
    <!-- /sidebar -->

    <!-- Site Content Wrapper -->
    <div class="dt-content-wrapper">

        <!-- Site Content -->
        <div class="dt-content">

            <div class="row">

            </div>

        </div>
        <!-- /site content -->

        <!-- Footer -->
        <footer class="dt-footer">
            Copyright Company Name © 2019
        </footer>
        <!-- /footer -->

    </div>
    <!-- /site content wrapper -->

    <!-- Theme Chooser -->
    <div class="dt-customizer-toggle">
        <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-spin icon-setting"></i> </a>
    </div>
    <!-- /theme chooser -->

    <!-- Customizer Sidebar -->
    <aside class="dt-customizer dt-drawer position-right">
        <div class="dt-customizer__inner">

            <!-- Customizer Header -->
            <div class="dt-customizer__header">

                <!-- Customizer Title -->
                <div class="dt-customizer__title">
                    <h3 class="mb-0">Theme Settings</h3>
                </div>
                <!-- /customizer title -->

                <!-- Close Button -->
                <button type="button" class="close" data-toggle="customizer">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- /close button -->

            </div>
            <!-- /customizer header -->

            <!-- Customizer Body -->
            <div class="dt-customizer__body ps-custom-scrollbar">
                <!-- Customizer Body Inner  -->
                <div class="dt-customizer__body-inner">

                    <!-- Section -->
                    <section id="theme-chooser">
                        <h6 class="text-uppercase">Theme</h6>

                        <!-- Button Group -->
                        <div class="dt-customizer__btn-group btn-group btn-group-toggle btn-group mb-1" data-toggle="buttons"><label
                                    class="btn btn-outline-light"><input class="theme-option" type="radio" name="options"
                                                                         id="theme-option-lite" value="lite">Lite</label> <label
                                    class="btn btn-outline-light"><input class="theme-option" type="radio" name="options"
                                                                         id="theme-option-semidark" value="semidark">Semi Dark</label>
                            <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options"
                                                                        id="theme-option-dark" value="dark">Dark</label></div>
                        <!-- /button group -->

                    </section>
                    <!-- /section -->

                    <!-- Section -->
                    <section id="theme-style-chooser">
                        <h6 class="text-uppercase">Colors</h6>

                        <!-- List -->
                        <ul class="dt-list dt-list-sm dt-color-options">
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-1"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-2"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-3"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-4"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-5"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-6"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-7"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-8"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-9"></span>
                            </li>
                            <li class="dt-list__item">
                                <span class="dt-color-option" data-style="style-10"></span>
                            </li>
                        </ul>
                        <!-- /list -->

                    </section>
                    <!-- /section -->

                    <!-- Section -->
                    <section>
                        <h6 class="text-uppercase">Nav Style</h6>

                        <!-- List -->
                        <ul class="dt-list">
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/default" target="_blank" class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/fixed.png')}}" alt="Fixed Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/mini-sidebar" target="_blank"
                                       class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/mini-sidebar.png')}}" alt="Mini Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/drawer" target="_blank" class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/drawer-nav.png')}}" alt="Drawer Nav Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/back-office-mini" target="_blank"
                                       class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/no-header-mini-sidebar.png')}}"
                                             alt="No Header Mini Sidebar Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/back-office" target="_blank"
                                       class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/vertical-no-header.png')}}"
                                             alt="Vertical No Header Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/horizontal" target="_blank" class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/horizontal-default.png')}}"
                                             alt="Horizontal Default Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/horizontal-dark" target="_blank"
                                       class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/horizontal-dark.png')}}"
                                             alt="Horizontal Dark Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/horizontal-inside-nav" target="_blank"
                                       class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/horizontal-inside-nav.png')}}"
                                             alt="Horizontal Inside Nav Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/horizontal-bottom-nav" target="_blank"
                                       class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/horizontal-bottom-nav.png')}}"
                                             alt="Horizontal Bottom Nav Layout">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="http://wieldy.g-axon.work/html-bs4/horizontal-top-nav" target="_blank"
                                       class="choose-option__icon">
                                        <img src="{{URL::asset('v2/assets/images/layouts/horizontal-top-nav.png')}}"
                                             alt="Horizontal Top Nav Layout">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- /list -->

                    </section>
                    <!-- /section -->

                    <!-- Section -->
                    <section id="layout-chooser">
                        <h6 class="text-uppercase">Layout</h6>

                        <!-- List -->
                        <ul class="dt-list dt-list-sm">
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="javascript:void(0)" class="choose-option__icon" data-layout="framed">
                                        <img src="{{URL::asset('v2/assets/images/layouts/framed.png')}}" alt="Framed">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="javascript:void(0)" class="choose-option__icon" data-layout="full-width">
                                        <img src="{{URL::asset('v2/assets/images/layouts/full-width.png')}}" alt="Full Width">
                                    </a>
                                </div>
                            </li>
                            <li class="dt-list__item">
                                <div class="choose-option">
                                    <a href="javascript:void(0)" class="choose-option__icon" data-layout="boxed">
                                        <img src="{{URL::asset('v2/assets/images/layouts/boxed.png')}}" alt="Boxed">
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <!-- /list -->

                    </section>
                    <!-- /section -->

                </div>
                <!-- /customizer body inner -->
            </div>
            <!-- /customizer body -->

        </div>
    </aside>
    <!-- /customizer sidebar -->

</main>
