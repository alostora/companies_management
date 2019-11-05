<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{\Auth::guard('admin')->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> @lang('leftsidebar.online')</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">
          @if(App::getLocale() == "ar")
            <a href="{{url('admin/lang/en')}}" style="color: red">English</a>
          @else
            <a href="{{url('admin/lang/ar')}}" style="color: red">عربي</a>
          @endif
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>@lang('leftsidebar.Control Panel')</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li>
                  <a href="{{url('admin/adminInfo')}}"><i class="fa fa-circle-o"></i>@lang('leftsidebar.Admins')</a>
              </li>

                
              <li >
                <a href="{{url('admin/userInfo')}}"><i class="fa fa-circle-o"></i>@lang('leftsidebar.Users')</a>
              </li>

              <li >
                <a href="{{url('admin/religionInfo')}}"><i class="fa fa-circle-o"></i>@lang('leftsidebar.Religion')</a>
              </li>



            <li >
              <a href="{{url('admin/conditionsInfo')}}"><i class="fa fa-circle-o"></i>@lang('leftsidebar.conditions')</a>
            </li>



              <!-- start multi Level -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>@lang('leftsidebar.Managements')</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                <a href="{{url('admin/managementInfo')}}"><i class="fa fa-circle-o"></i>@lang('leftsidebar.ManagementsInfo')</a>
              </li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> @lang('leftsidebar.Jobs')
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="{{url('admin/jobInfo')}}"><i class="fa fa-circle-o"></i>
                       @lang('leftsidebar.JobsInfo')</a>
                    </li>
                    <li>
                      <a href="{{url('admin/jobOrderInfo')}}"><i class="fa fa-circle-o"></i>
                       @lang('leftsidebar.jobRequiredInfo')</a>
                    </li>



                    <li class="treeview">
                      <a href="#"><i class="fa fa-circle-o"></i>@lang('leftsidebar.interviewInfo')
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li>
                          <a href="{{url('admin/interviewInfo')}}"><i class="fa fa-circle-o"></i>
                           @lang('leftsidebar.interviewInfo')</a>
                        </li>

                        <!-- <li>
                          <a href="{{url('admin/myInterviewInfo')}}"><i class="fa fa-circle-o"></i>@lang('leftsidebar.MyInterview')</a>
                        </li> -->

                      </ul>
                    </li>  
                    

                    <!-- <li>
                      <a href="{{url('admin/hiringSpecialistActions')}}"><i class="fa fa-circle-o"></i>اجراءات اخصائي التوظيف</a>
                    </li> -->


                    <li class="treeview">
                      <a href="#"><i class="fa fa-circle-o"></i>@lang('leftsidebar.Questions')
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="{{url('admin/questionInfo')}}"><i class="fa fa-circle-o"></i>@lang('leftsidebar.QuestionInfo')</a></li>

                        <!-- <li>
                          <a href="{{url('admin/fackAnswerInfo')}}"><i class="fa fa-circle-o"></i>@lang('leftsidebar.FackAnswerInfo')</a>
                        </li> -->
                      </ul>
                    </li>



                  </ul>
                </li>
                <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li> -->
              </ul>
            </li>
            <!-- end multi level -->


          </ul>
        </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>