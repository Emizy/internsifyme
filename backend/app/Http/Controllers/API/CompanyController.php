<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class CompanyController extends BaseController
{
    public function index()
    {
        
        $companies = DB::table('companies')->get();

        return $this->sendResponse($companies, 'Fetched Successfully!');
    } 

    public function store(Request $request)
    {  
        
        // check of company exist already
        $company = Company::where('user_id', auth()->user()->id)->first();

        if(is_null($company) ){

            $this->validate($request, [
                'name' => 'required|min:3|max:150|unique:companies',
                'email' => 'required|email|',
                'about' => 'required',
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
                'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
            ]);
    
            if ($image = $request->file('logo')) {
                $destinationPath = 'imgs/profile/';
                $companyLogo = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $companyLogo);
                $request->logo = env('APP_URL').'/imgs/profile/'.$companyLogo;
            }else{
                $request->logo = env('APP_URL').'/imgs/profile/no_company_logo.png';
            }

            if ($image = $request->file('banner')) {
                $destinationPath = 'imgs/profile/';
                $companyBanner = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $companyBanner);
                $request->banner = env('APP_URL').'/imgs/profile/'.$companyBanner;
            }else{
                $request->banner = env('APP_URL').'/imgs/profile/no_company_banner.png';
            }
    
            $company =  new Company();
            $company->user_id = auth()->user()->id;
            $company->name = $request->name;
            $company->motto = $request->motto;
            $company->about = $request->about;
            $company->email = $request->email;
            $company->logo = $request->logo;
            $company->banner = $request->banner;
            $company->industry = $request->industry;
            $company->recruitment_process = $request->recruitment_process;
            $company->stipend_range = $request->stipend_range;
            $company->currency = $request->currency;
            $company->country = $request->country;
            $company->state = $request->state;
            $company->city = $request->city;
            $company->zip_code = $request->zip_code;
            $company->website = $request->website;
            $company->facebook = $request->facebook;
            $company->instagram = $request->instagram;
            $company->twitter = $request->twitter;
            $company->linkedin = $request->linkedin;

            if ($company->save()){
                    
                   // Company profile created succesfull, now set the value: 1
                   DB::table('users')->where('id', auth()->user()->id)->update(
                      [
                          'profile_created' => 1,
                      ]
                  );

                $data['company'] = $company->toArray();
                return $this->sendResponse($data, 'Company Created Successfully!');
            }else{
                return $this->sendError('Company not Created Successfully!', 'null');  
            }
        }else{
            return $this->sendError('You already have a Company on your profile!', 'null'); 
        }
        
    }

    
    public function update(Request $request, $id)
    {
        $company = DB::table('companies')->where('id', $id)->first();
        if($company){
            $this->validate($request, [
                'name' => 'required|min:3|max:150',
                'email' => 'required|email|',
                'about' => 'required',
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
            ]);

            if ($image = $request->file('logo')) {
                $destinationPath = 'imgs/profile/';
                $companyLogo = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $companyLogo);
                $request->logo = env('APP_URL').'/imgs/profile/'.$companyLogo;
            }else{
                $request->logo = env('APP_URL').'/imgs/profile/no_company_logo.png';
            }

            if ($image = $request->file('banner')) {
                $destinationPath = 'imgs/profile/';
                $companyBanner = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $companyBanner);
                $request->banner = env('APP_URL').'/imgs/profile/'.$companyBanner;
            }else{
                $request->banner = env('APP_URL').'/imgs/profile/no_company_banner.png';
            }

            $update_company = DB::table('companies')->where('id', $id)->update(request()->all());

            if($update_company){
                return $this->sendResponse('success', 'Company updated successfully!');
            }else {
                return $this->sendError('No update made', 'Null'); 
            }


        }else{
            return $this->sendError('error', 'No company found'); 
        }
    }

    public function destroy($id)
    {

        $intern = DB::table('companies')->where('id', $id)->first();

        if($intern){   
            if (DB::table('companies')->where('id', $id)->delete()) {
                return $this->sendResponse('success', 'Company deleted successfully!');
            } else {
                return $this->sendError('The company can not deleted', 'Null'); 
            }
        }else{
            return $this->sendError('Not company with that is ID found', 'Null'); 
        }

    }

    public function getRecruiterCompany(Request $request){
        $company = DB::table('companies')->where('user_id', auth()->user()->id)->first();
        if($company){
            $data['company'] = $company;
            return $this->sendResponse($data, 'Company is fetched successfully!');                
        }else{
            return $this->sendError('No authenticated user found', 'Null'); 
        }
    }


    public function updateCompanyInfo(Request $request){
        $company = DB::table('companies')->where('user_id', auth()->user()->id)->first();
        if($company){
            $this->validate($request, [
                'name' => 'required|min:3|max:150',
                'email' => 'required|email|',
                'about' => 'required',
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
            ]);

        
            $input = $request->except('_method');

            // attend to logo
            if($imagePath = $request->file('logo')){
                $imageName = time().'.'.$imagePath->getClientOriginalExtension();

                $imagePath->move('imgs/profile/',$imageName);
                $input['logo'] = env('APP_URL').'/imgs/profile/'.$imageName;
            }

             // attend to logo
            if($imagePath = $request->file('banner')){
                $imageName = time().'.'.$imagePath->getClientOriginalExtension();

                $imagePath->move('imgs/profile/',$imageName);
                $input['banner'] = env('APP_URL').'/imgs/profile/'.$imageName;
            }


            $update_company = DB::table('companies')->where('user_id', auth()->user()->id)->update($input);

            if($update_company){
                return $this->sendResponse('success', 'Company updated successfully!');
            }else {
                return $this->sendError('No update made', 'Null'); 
            }


        }else{
            return $this->sendError('error', 'No company found'); 
        }
    }

       /*
    * fetchAllInternsRandomly
    */
    public function fetchAllCompaniesRandomly(Request $request)
    {
     
        $companies = Company::inRandomOrder()->limit(30)->get();
        // $data['companies'] = $companies;
        $data['companies'] = [];

        foreach ($companies as $company){
            $available_jobs = DB::table('jobs')
                ->where('posted_by', $company->user_id)
                ->where('active', 1)
                ->get()->count();
          
            $company['available_jobs'] = $available_jobs;
            $data['companies'][] = $company;
        }

        return $this->sendResponse($data, 'Companies fetched successfully!');
        
    }

}
