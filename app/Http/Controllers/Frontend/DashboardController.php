<?php namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fs;
use App\FeatureRelation;
use App\FsVersion;
use Validator;
use Auth;
use DB;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Frontend
 */
class DashboardController extends Controller {

	/**
	 * @return mixed
	 */
	public function index()
	{

		$user_fss =Fs::with('fs_versions')->where('user_id',auth()->user()->user_id)->get();
			// print_r($user_fss);die(); 
		return view('frontend.user.dashboard', ['user_fss' => $user_fss])
			->withUser(auth()->user());
	}
	public function add_fs(){
		$features_re = FeatureRelation::select('child_feature_id as id','parent_feature_id as parent_id')->get()->toArray();
		
		$tree = $this->buildTree($features_re);
		// print_r($tree);die();
		$features = DB::table('features')->lists( 'title','feature_id');
		$features_details = DB::table('features')->get();
		$app_details  = array( );
			foreach ($features_details as $features_detail) {
				$app_details[$features_detail->feature_id] = $features_detail;
				# code...
			}
		// print_r($app_details);die();
		
		return view('frontend.user.add_fs',['app_details' =>$app_details ,'features' => $features,'tree' => $tree]);
	}
	public function buildTree(array $elements, $parentId = '') {
		    $branch = array();
		    foreach ($elements as $element) {
		        if ($element['parent_id'] == $parentId) {
		            $children = $this->buildTree($elements, $element['id']);
		            if ($children) {
		                $element['children'] = $children;
		            }
		            $branch[] = $element;
		        }
		    }

		    return $branch;
		}


	public function add_fs_req(Request $request){


		$input = $request->all();
		// print_r($input);die();
		// print_r($request->file('dev_company_logo'));die();
		 $validator = Validator::make($request->all(), [
            'document_title' => 'required',
            'document_sub_title' => 'required',
            'dev_company_name' => 'required',
            'client_company_name' => 'required',
            'objective' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('dashboard/add_fs')
                        ->withErrors($validator)
                        ->withInput();
        }

        $FS = new Fs();
        $FS->fs_name = $input['document_title'];
        $FS->user_id = Auth::user()->user_id;
        $FS->save();
        $FS_VERSION = new FsVersion();

        $FS_VERSION->fs_id = $FS->fs_id;
        $FS_VERSION->save();
        if(empty($input['ios'])){
        	$input['ios']=0;
        }
        if(empty($input['android'])){
        	$input['android']=0;
        }
        if(empty($input['windows'])){
        	$input['windows']=0;
        }
        if(empty($input['ie'])){
        	$input['ie']=0;
        }
        if(empty($input['chrome'])){
        	$input['chrome']=0;
        }
        if(empty($input['safari'])){
        	$input['safari']=0;
        }
        if(empty($input['english'])){
        	$input['english']=0;
        }

          


        $id = DB::table('section_field_values')->insertGetId(
		    ['fs_version_id' => $FS_VERSION->fs_version_id,
		     'document_title' => $input['document_title'],
		     'document_sub_title' => $input['document_sub_title'],
		     'dev_company_name' => $input['dev_company_name'],
		     'client_company_name' => $input['client_company_name'],
		     'objective' => $input['objective'],
		     'ios'=> $input['ios'],
		     'lowest_ios_version' => $input['lowest_ios_version'],
		     'resolutions' => $input['resolutions'],
		     'ios_oriantation' => $input['ios_oriantation'],
		     'android' => $input['android'],
		     'windows' => $input['windows'],
		     'other_platform' => $input['other_platform'],
		     'ie' => $input['ie'],
		     'ie_lowest_version' => $input['ie_lowest_version'],
		     'chrome' => $input['chrome'],
		     'safari' => $input['safari'],
		     'monetization_model' => $input['monetization_model'],
		     'monetization_description' => $input['monetization_description'],
		     'english' => $input['english'],
		     'other_langauge' => $input['other_langauge'],


		     ]
		);
	
		$imageName1 = 'dev_company_logo'.$id . '.' . 
		    $request->file('dev_company_logo')->getClientOriginalExtension();

		    $request->file('dev_company_logo')->move(
		        base_path() . '/public/images/catalog/', $imageName1
		    );
		$imageName2 = 'client_company_logo'.$id . '.' . 
		    $request->file('client_company_logo')->getClientOriginalExtension();

		    $request->file('client_company_logo')->move(
		        base_path() . '/public/images/catalog/', $imageName2
		    );

		DB::table('section_field_values')
            ->where('section_field_value_id', $id)
            ->update(['dev_company_logo' => $imageName1,
            			'client_company_logo' => $imageName2
            	]);
            $each_features = $input['each_feature'];
        foreach ($each_features as $each_feature) {
        	// $fruit = array_shift($each_feature);
        	// print_r($fruit);die();
        	DB::table('fs_features')->insert(
		    ['fs_version_id' => $FS_VERSION->fs_version_id,
		      'section_id' => array_shift($each_feature),
		      'title' => array_shift($each_feature),
		      'description' => array_shift($each_feature),
		      'caption' => array_shift($each_feature)


		    ]);

        	# code...
        }

        return redirect('dashboard')->with('success','FS created');
		// print_r($input);die();
	}
}