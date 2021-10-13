<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
	public function employeeList(Request $request){
		$data= Employee::with('company')->paginate(10);
		return view('Admin.viewEmployee')->with('data',$data);

	}

	public function addEmployee(Request $request){
		$company_name=Company::all();
		return view('Admin.addEmployee')->with('company_name',$company_name);
	}

	public function saveEmployee(Request $request){
		$id=$request->id;
		$employee = Employee::where('id', $request->id)->first();
		if (!isset($employee) && $employee == '') {
			$validatedData = $request->validate([
				'first_name' => 'required',
				'last_name' => 'required',
				'email' => 'required|email',
				'phone_no' => 'required',
			], [
				'first_name.required' => 'First Name is required',
				'last_name.required' => 'Last Name is required',
				'phone_no.required' => 'Phone Number is required',
				'email.required' => 'Email is required',
			]);
			$employee = new Employee;
		}
		$employee->first_name = $request->first_name;
		$employee->last_name = $request->last_name;
		$employee->email = $request->email;
		$employee->company_id = $request->company_id;
		$employee->phone_no = $request->phone_no;		
		
		$employee->save();
		return redirect('employee/view');
	}

	public function editEmployee($id){

		$employee= Employee::find($id);
		$company_name=Company::all();
		return view('Admin.addEmployee')->with('employee',$employee)->with('company_name',$company_name);
	}

	public function deleteEmployee($id)
	{
		Employee::find($id)->delete();
		return redirect('company/view');
	}


	public function addcompany(){
		return view('Admin.addCompany');
	}

	public function savecompany(Request $request){

		
		$id=$request->id;
		$company = Company::where('id', $request->id)->first();
		if (!isset($company) && $company == '') {
			$validatedData = $request->validate([
				'name' => 'required',
				"logo"  => "required|dimensions:width=100,height=100",
			], [
				'name.required' => 'Name is required',
				'logo.required' => 'Logo must be 100*100|Dimension must be 100*100',
			]);
			$company = new Company;
		}
		$company->name = $request->name;
		$company->email = $request->email;
		if($request->file('logo') !=''){
			$name = $request->file('logo')->getClientOriginalName(); 
			$path = $request->file('logo')->storeAs('',$name);			
			$company->logo=$path;
		}
		$company->website=$request->website;
		$company->save();
		return redirect('company/view');
	}

	public function companyList(Request $request){
		$data= Company::paginate(10);
		return view('Admin.CompanyList')->with('data',$data);
	}

	public function editCompany($id){

		$company= Company::find($id);
		return view('Admin.addCompany')->with('company',$company);
	}
	public function deletecompany($id)
	{
		Company::find($id)->delete();
		return redirect('company/view');
	}
}



