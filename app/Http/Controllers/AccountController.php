<?php

namespace App\Http\Controllers;
use App\Models\Income;
use App\Models\Expense;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function expense()
    {
     
        return view("admin.Account.expense");

    }
    public function expenselist()
    {
        $expenses = Expense::all();
        return view("admin.account.expenselist")->with('expenses',  $expenses);

    }


    public function income()
    {
        $incomes = Income::all();
        return view("admin.account.income")->with('incomes',  $incomes);
    }

    public function store(Request $request)
    {


        $request->validate([
           'expensename',
           'cost',
    

        ]);

        $expense= new Expense();
        $expense->expensename = $request->expensename;
        $expense->cost = $request->cost;
        $expense->save();

        return redirect("admin/Account/expenselist")->with("success", "Total Expense");

    }



}
