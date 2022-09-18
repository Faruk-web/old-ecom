<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department_salary;
use Illuminate\Support\Facades\DB;
use PDF;
use DateTime;
use App\Models\Order;
use App\Models\Expense;
use Carbon\Carbon;

class ReportController extends Controller
{
    // ReportView
    public function ReportView(){

        return view('backend.report.report_view');
    } // end mathod

        // search by date
         public function ReportByDate(Request $request){

        // return $request->all();
        $date = new DateTime($request->date);

        $formatDate = $date->format('Y-m-d');

        // return $formatDate;
        $orders = Order::whereDate('order_date',$formatDate)->latest()->get();


        //dd($orders);
        return view('backend.report.report_show',compact('orders'));

     } // end mehtod

     // search by Month
     public function ReportByMonth(Request $request){

        $orders = Order::where('order_month',$request->month)->where('order_year',$request->year_name)->latest()->get();
        return view('backend.report.report_show',compact('orders'));

    } // end mehtod

     // search by Year
       public function ReportByYear(Request $request){

        $orders = Order::where('order_year',$request->year)->latest()->get();
        return view('backend.report.report_show',compact('orders'));
    } // end mehtod



        //sallary report view
                public function SalaryReportView(){

             return view('backend.report.salary_report');

        }

               //get salary report
                public function SalaryReport(Request $request){

                $dateValue=$request->all();

                        /*

                        check request has any value called only 'date'
                        then search for the date
                        check request has any value called  'month' and 'year_name'
                        then search for the month name
                        check request has any value called  'year'
                        then search for year

                        @excelitai-mahedi

                        */


                        //check by date
                        if(array_key_exists('date',$dateValue)){
                        // dd($dateValue['date']);

            //get date from database
            $first_date = Carbon::create($dateValue['date'])->startOfMonth();
            $end_date = Carbon::create($dateValue['date'])->endOfMonth();



                $paidEmployes = DB::table('employees')
                    ->join('department_salaries', 'employees.id', '=', 'department_salaries.employee_id')
                    ->whereBetween('department_salaries.salary_date', [$first_date, $end_date])
                    ->select('employees.*', 'department_salaries.paid_salary','department_salaries.due_salary','department_salaries.bonus','department_salaries.advance_salary','department_salaries.total_salary')
                    ->get();


                //dd($paidEmployes);










            }



            //check by month

            if(array_key_exists('month',$dateValue) && array_key_exists("year_name",$dateValue)){







                $paidEmployes = DB::table('employees')
                    ->join('department_salaries', 'employees.id', '=', 'department_salaries.employee_id')->whereMonth('department_salaries.salary_date', $dateValue['month'])
                    ->whereYear('department_salaries.salary_date', $dateValue['year_name'])
                    ->select('employees.*', 'department_salaries.paid_salary','department_salaries.due_salary','department_salaries.bonus','department_salaries.advance_salary','department_salaries.total_salary')
                    ->groupBy('employees.department_id')
                    ->get();

                   if(count($paidEmployes)!=0){

                    //dd($paidEmployes);
                    return view('backend.DepartmentSalary.paidSalary',compact('paidEmployes'));

                //     $pdf = PDF::loadView('backend.report.salary_pdf',compact('paidEmployes'))->setPaper('a4')->setOptions([
                //         'tempDir' => public_path(),
                //         'chroot' => public_path(),
                // ]);
                // return $pdf->download('expense.pdf');



                   }
                   else {

                    return Redirect()->back()->withErrors(['month' => 'No data Found']);
                   }


            }

            //check by only year

            if(array_key_exists('year',$dateValue)){


                $paidEmployes = DB::table('employees')
                ->join('department_salaries', 'employees.id', '=', 'department_salaries.employee_id')
                ->whereYear('department_salaries.salary_date', $dateValue['year'])

                ->select('employees.*', 'department_salaries.paid_salary','department_salaries.due_salary',
                'department_salaries.bonus',
                'department_salaries.advance_salary','department_salaries.total_salary')
                ->get();

                if(count($paidEmployes)!=0){


                    return view('backend.DepartmentSalary.paidSalary',compact('paidEmployes'));


                }
                else {

                 return Redirect()->back()->withErrors(['year' => 'No data Found']);
                }






            }

            //end check by year






            }

            //end sallary report




//end method



//return report view
 public function returnReportView(){

    return view('backend.report.return_product_report');

 }

                       //get return report
                        public function returnReport(Request $request){

                            //dd($request->all());


                            $dateValue=$request->all();

                            /*

                            check request has any value called only 'date'
                            then search for the date
                            check request has any value called  'month' and 'year_name'
                            then search for the month name
                            check request has any value called  'year'
                            then search for year

                            @excelitai-mahedi

                            */


                            //check by date
                            if(array_key_exists('date',$dateValue)){
                            // dd($dateValue['date']);

                        //get date from database
                        $orders= Order::where('return_order',2)->where('return_date',$dateValue['date'])->get();

                        if(count($orders)!=0){

                            //dd($paidEmployes);
                            return view('backend.return_order.all_return_request',compact('orders'));


                            }
                            else {

                            return Redirect()->back()->withErrors(['date' => 'No data Found']);
                            }



                        }



                        //check by month

                        if(array_key_exists('month',$dateValue) && array_key_exists("year_name",$dateValue)){

                            $orders= Order::where('return_order',2)->whereMonth('return_date', $dateValue['month'])
                    ->whereYear('return_date', $dateValue['year_name'])->get();

                        if(count($orders)!=0){

                        //dd($paidEmployes);
                        return view('backend.return_order.all_return_request',compact('orders'));


                        }
                        else {

                        return Redirect()->back()->withErrors(['month' => 'No data Found']);
                        }


                        }

                        //check by only year

                        if(array_key_exists('year',$dateValue)){

                            $orders= Order::where('return_order',2)
                            ->whereYear('return_date', $dateValue['year'])->get();

                                if(count($orders)!=0){

                                //dd($paidEmployes);
                                return view('backend.return_order.all_return_request',compact('orders'));


                                }
                                else {

                                return Redirect()->back()->withErrors(['year' => 'No data Found']);
                                }



                        }
                    }
//end return report


//end method
//user report view
 public function UserActivityReportView(){

    return view('backend.report.active_user');

 }
//end methood

//get user activity report
public function  UserActivityReport(Request $request){

    dd($request->all());

}

//end method






//mesba



 // ProfitReportView
 public function ProfitReportView(){

    return view('backend.report.profit_report');
} // end mathod




     // search ProfitReportDay
     public function ProfitReportDay(Request $request){

    $date = new DateTime($request->date);

        $formatDate = $date->format('Y-m-d');

        // return $formatDate;
        $totalincome= Order::whereDate('order_date',$formatDate)->where('status','=', 'delivered')->sum('amount');
         $returnamount= Order::whereDate('updated_at',$formatDate)->where('return_order','=', '2')->sum('amount');
        $salarypay= Department_salary::whereDate('salary_date',$formatDate)->sum('paid_salary');
        $expancepay= Expense::whereDate('expense_date',$formatDate)->sum('expense_amount');
        $profit=$totalincome-$salarypay;
        // $pdf=PDF::loadView('backend.report.profit_report_pdf',compact('totalincome','salarypay','expancepay','profit'))->setPaper(array(0,0,204,600));
        // return $pdf->stream('backend.report.profit_report_pdf') ;
        $profit=$totalincome -($salarypay+$expancepay+$returnamount);
        return view('backend.report.profit_report_pdf',compact('totalincome','salarypay','expancepay','profit','returnamount'));
} // end mehtod
 // search ProfitReportDay
 public function ProfitReportMonth(Request $request){

    $date= Carbon::createFromDate($request->year_name, $request->month);

        $startOfTheMonth = $date->startOfMonth();
        $startOfTheMonth=$startOfTheMonth->toDateString();
        $endOfTheMonth = $date->endOfMonth();
        $endOfTheMonth=$endOfTheMonth->toDateString();

        // return $formatDate;
        $totalincome= Order::where('order_month',$request->month)->where('order_year',$request->year_name)->where('status','=', 'delivered')->sum('amount');
        $returnamount= Order::where('order_month',$request->month)->where('order_year',$request->year_name)->where('return_order','=', '2')->sum('amount');
        $salarypay= Department_salary::whereBetween('salary_date',[$startOfTheMonth,$endOfTheMonth])->sum('paid_salary');
        $expancepay= Expense::whereBetween('expense_date',[$startOfTheMonth,$endOfTheMonth])->sum('expense_amount');


        $profit=$totalincome -($salarypay+$expancepay+$returnamount);

        // $pdf=PDF::loadView('backend.report.profit_report_pdf',compact('totalincome','salarypay','expancepay','profit'))->setPaper(array(0,0,204,600));
        // return $pdf->stream('backend.report.profit_report_pdf') ;
        return view('backend.report.profit_report_pdf',compact('totalincome','salarypay','expancepay','profit','returnamount'));

} // end mehtod
 // search ProfitReportyear
 public function ProfitReportYear(Request $request){

    $date= Carbon::createFromDate($request->year_name);

        $formatDate = $date->format('Y');

        // return $formatDate;
        $totalincome= Order::where('order_year',$request->year)->where('status','=', 'delivered')->sum('amount');
        $returnamount= Order::where('order_year',$request->year)->where('return_order','=', '2')->sum('amount');
        // dd($request->year_name);
        $salarypay= Department_salary::whereYear('salary_date',$formatDate)->sum('paid_salary');

        $expancepay= Expense::whereYear('expense_date',$formatDate)->sum('expense_amount');
        $profit=$totalincome -($salarypay+$expancepay+$returnamount);

        // $pdf=PDF::loadView('backend.report.profit_report_pdf',compact('totalincome','salarypay','expancepay','profit'))->setPaper(array(0,0,400,200));
        // return $pdf->stream('backend.report.profit_report_pdf') ;
        return view('backend.report.profit_report_pdf',compact('totalincome','salarypay','expancepay','profit','returnamount'));
} // end mehtod





}
