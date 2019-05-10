<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use App\First_meal;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('orders')
                ->select('orders.order_id','orders.wedding_day','orders.orderer_name','orders.guest_number','orders.overall_payment','orders.prepayment_status','first_meals.first_name','category_list.cat_name')
                ->leftjoin('first_meals','first_meals.first_id','=','orders.first_meal_id')
                ->leftjoin('second_meals','second_meals.second_id','=','orders.second_meal_id')
                ->leftjoin('category_list','category_list.cat_id','=','first_meals.first_id')
                ->orderBy('orders.order_date', 'desc')
                ->paginate(5);
        return view('home')->with('orders',$data);

       
    }

    public function getNoWeds()
    {
        $data['overall'] =  DB::table('orders')->count();
        $data['upcoming'] = Order::whereBetween('wedding_day', [now(),now()->addDays(30)])->count();


        return $data;
    }

    public function getDetails(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('orders AS o')
                ->select('o.order_id','o.orderer_name','o.wedding_day','o.guest_number','o.overall_payment','o.prepayment_status','first_meals.first_name', 'second_meals.second_name', 'o.light_show','o.projector')
                ->crossjoin('first_meals','first_meals.first_id','=','o.first_meal_id')
                ->crossjoin('second_meals','second_meals.second_id','=','o.second_meal_id')
                ->orderBy('o.order_date', 'desc')
                ->where('o.order_id', '=',  $id)
                ->get();

        return json_encode($data);
    }


}
