<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        H-R
        <small>@lang('home.Control panel')</small>  
      </h1>
      
      
    </section>

    <!-- Main content -->
    <section class="content">
     <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              @if(isset($admins))
                <h3>{{count($admins)}}</h3>
              @endif  
                <p>@lang('home.admin')</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{url('admin/adminInfo')}}" class="small-box-footer">@lang('home.More info')<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              @if(isset($users))
                <h3>{{count($users)}}</h3>
              @endif  
              <p>@lang('home.users')</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{url('admin/userInfo')}}" class="small-box-footer">@lang('home.More info')<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


      </div>

    </section>
  </div>