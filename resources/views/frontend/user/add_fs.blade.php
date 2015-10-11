@extends('frontend.layouts.master')

@section('content')





  


<div class="row">

		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">Update Information</div>

				<div class="panel-body">
					{!! Form::open(['url' => 'dashboard/add_fs_req', 'class' => 'form-horizontal', 'role' => 'form','files' => true]) !!}

                    		 	<div class="form-group">
									<h2>Cover Page</h2>
								</div>
                              <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">Documet Title</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="document_title" type="text" >
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">document_sub_title</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="document_sub_title" type="text" >
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">dev_company_name</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="dev_company_name" type="text" >
                                    </div>
                              </div>
                              <!-- <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">dev_company_logo</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="dev_company_logo" type="text" >
                                    </div>
                              </div> -->


                              <div class="form-group">
                                  <label for="name" class="col-md-4 control-label">dev_company_logo</label>
                                    <div class="col-md-6">
                                  {!! Form::file('dev_company_logo', null) !!}
                                    </div>
                              </div>


                              <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">client_company_name</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="client_company_name" type="text" >
                                    </div>
                              </div>

                              <div class="form-group">
                                  <label for="name" class="col-md-4 control-label">client_company_logo</label>
                                    <div class="col-md-6">
                                  {!! Form::file('client_company_logo', null) !!}
                                    </div>
                              </div>


                              

                              <div class="form-group">
									<h2>Overview</h2>
								</div>

								<div class="form-group">
                                    <label for="name" class="col-md-4 control-label">objective</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="objective" type="text" >
                                    </div>
                              </div>
                              
                              Platform
                               <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input name="ios" type="checkbox" value="1"> IOS
		                                    </label>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">lowest_ios_version</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="lowest_ios_version" type="text" >
                                    </div>
                              	</div>
                              	<div class="form-group">
                                    <label for="name" class="col-md-4 control-label">resolutions</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="resolutions" type="text" >
                                    </div>
                              	</div>
                              	<div class="form-group">
                                    <label for="name" class="col-md-4 control-label">ios_oriantation</label>
                                    <div class="col-md-6">
                                        <input name="ios_oriantation" type="radio" value="Portrait">Portrait

                                        <input name="ios_oriantation" type="radio" value="Landscape">Landscape
                                    </div>
                              	</div>

                              	<div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input name="android" type="checkbox" value="1"> android
		                                    </label>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input name="windows" type="checkbox" value="1"> windows
		                                    </label>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input name="other_platform1" type="checkbox" value="1"> <input type="text" name="other_platform">
		                                    </label>
		                                </div>
		                            </div>
		                        </div>

		                        Website

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input name="ie" type="checkbox" value="1"> ie
		                                    </label>
		                                </div>
		                            </div>
		                        </div>

		                         <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">ie_lowest_version</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="ie_lowest_version" type="text" >
                                    </div>
                              	</div>

		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input name="chrome" type="checkbox" value="1"> chrome
		                                    </label>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input name="safari" type="checkbox" value="1"> safari
		                                    </label>
		                                </div>
		                            </div>
		                        </div>

		                        Monetization Model
		                        <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">monetization_model</label>
                                    <div class="col-md-6">
                                        <input name="monetization_model" type="radio" value="Free">Free

                                        <input name="monetization_model" type="radio" value="Paid">Paid
                                        <input name="monetization_model" type="radio" value="Subscription">Subscription
                                    </div>
                              	</div>

                              	<div class="form-group">
                                    <label for="name" class="col-md-4 control-label">monetization_description</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="monetization_description" type="text" >
                                    </div>
                              	</div>

                              	Language Supported
                              	<div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <div class="checkbox">
		                                    <label>
		                                        <input name="english" type="checkbox" value="1">english
		                                    </label>
		                                </div>
		                            </div>
		                        </div>

		                        <div class="form-group">
                                    <label for="name" class="col-md-4 control-label">other_langauge</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="other_langauge" type="text" >
                                    </div>
                              	</div>

                                <h2>Application</h2>
                                <div class="form-group">
                                  <label for="name" class="col-md-4"></label>
                                  <div class="col-md-6">
                                <ul class="tree">
                                  <?php 

                                  function print_node($element,$features,$app_details){
                                    echo  '<li><input type="hidden" name="feature_ids[]" value="'.$element['id'].'"> <a  class="feature_ids" value="'.$element['id'].'" href="#">'.$features[$element['id']].'</a><span class="closeButton">X</span><ul>' ;
                                    ?>
                                    <a class="btn" data-toggle="modal" data-target="#myModal_{{$element['id']}}">edit</a>
                                    <!-- Modal -->
                                      <div class="modal fade" id="myModal_{{$element['id']}}" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Feature Edit</h4>
                                            </div>
                                            <div class="modal-body">
                                                
                                              <input class="form-control" name="each_feature[{{$element['id']}}]['section_id']" value="{{$app_details[$element['id']]->section_id}}" type="hidden" >

                                                <div class="form-group">
                                                      <label for="name" class="col-md-4 control-label">Feature Title</label>
                                                      <div class="col-md-6">
                                                          <input class="form-control" name="each_feature[{{$element['id']}}]['title']" value="{{$app_details[$element['id']]->title}}" type="text" >
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="name" class="col-md-4 control-label">Feature Desc</label>
                                                      <div class="col-md-6">
                                                          <input class="form-control" name="each_feature[{{$element['id']}}]['description']" value="{{$app_details[$element['id']]->description}}" type="text" >
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                      <label for="name" class="col-md-4 control-label">Caption</label>
                                                      <div class="col-md-6">
                                                          <input class="form-control" name="each_feature[{{$element['id']}}]['caption']" value="{{$app_details[$element['id']]->caption}}" type="text" >
                                                      </div>
                                                </div>
                                                


                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    <!--odel-->

             
                                    <?php 

                                    if(!empty($element['children'])){
                                        foreach($element['children'] as $ele){

                                            print_node($ele,$features,$app_details);
                                        }
                                    }
                                    echo '</ul></li>';

                                  }
                                  ?>
                                 @foreach ($tree as $child)
                                    <?php  print_node($child,$features,$app_details); ?> 

                                 @endforeach 
                                </ul>
                                </div>

                              </div>
                              
                              <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <input class="btn btn-primary" type="submit" value="Save">
                                  </div>
                              </div>
                    {!! Form::close() !!}

                    

				</div><!--panel body-->

			</div><!-- panel -->

		</div><!-- col-md-10 -->

	</div>

  <style>
.tree { background-color:#2C3E50; color:#46CFB0;}
.tree li,
.tree li > a,
.tree li > span {
    padding: 4pt;
    border-radius: 4px;
}

.tree li a {
   color:#46CFB0;
    text-decoration: none;
    line-height: 20pt;
    border-radius: 4px;
}

.tree li a:hover {
    background-color: #34BC9D;
    color: #fff;
}

.active {
    background-color: #34495E;
    color: white;
}

.active a {
    color: #fff;
}

.tree li a.active:hover {
    background-color: #34BC9D;
}
.closeButton{
  cursor: pointer;
}
</style>

@endsection