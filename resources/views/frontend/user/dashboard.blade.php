@extends('frontend.layouts.master')

@section('content')
	<div class="row">

		<div class="col-md-10 col-md-offset-1">
            <a href="{{URL::to('dashboard/add_fs')}}">Add new fs</a>
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('navs.dashboard') }}</div>

				<div class="panel-body">
					
                    @foreach ($user_fss as $user_fs )
                        <div class="col-md-6">
                            <div class="header"> {{$user_fs->fs_name}}</div>
                            <div class="outer">
                                <div class="">
                                    @foreach($user_fs->fs_versions as $fs_version)
                                        <div class="col-md-12 fs-version">
                                            {{$user_fs->fs_name}} v{{$fs_version->version}}
                                            <div class="info">{{$fs_version->created_at}} | {{ Auth::user()->full_name }}</div>
                                        </div>
                                    @endforeach
                                    
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach




				</div><!--panel body-->

			</div><!-- panel -->

		</div><!-- col-md-10 -->

	</div><!-- row -->


    <style type="text/css">
.header{
    font-size: 18px;
    color:blue;

}
.outer{
    border: 1px solid black;
    width: 100%;
    float: left;
}
.fs-version{
    border-bottom: 1px solid #ddd;
    min-height: 50px;
    font-size: 17px;
    line-height: 30px;
    
}
.fs-version:last-child{
    border-bottom:none;

}
.info{
    font-size: 12px;
    color: #ccc;
}

</style>
@endsection