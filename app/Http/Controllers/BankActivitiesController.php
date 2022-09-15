<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationForm;
use App\Models\BankMaster;
use Session;
use Carbon\Carbon;
use Auth;

class BankActivitiesController extends Controller
{
    public function bankAppList()
    {
      $data = ApplicationForm::all();
      return view('bankActivity.index', compact('data'));
    }

    public function bankAppShow($id)
    {
      $data = ApplicationForm::find($id);
      $banks = BankMaster::all();
      return view('bankActivity.edit', compact('data', 'banks'));
    }

    public function bankAppUpdate(Request $request)
    {
      $data = ApplicationForm::find($request->app_id);
      $data->update([
        "bank_id" => $request->bank_id,
        "eligible_bank_loan" =>$request->eligible_bank_loan,
        "bank_receipt_date" => Carbon::parse($request->bank_receipt_date)->format('Y-m-d'),
        "amount_sanctioned" => $request->amount_sanctioned,
        "margin_money" => $request->margin_money,
        "subsidy_claimed" => $request->subsidy_claimed,
        "subsidy_received" => $request->subsidy_received,
        "date_of_sanction" => Carbon::parse($request->date_of_sanction)->format('Y-m-d'),
        "reason_for_delay" => $request->delay_reason,
        "status" => 'SANCTIONED',
      ]);
      return redirect()->route('bankAppList');
    }
}
