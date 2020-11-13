<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;
use DB;

class BuyerPurchaseController extends Controller
{
    public function SecondBuyerElq(){


        // $buyer = Buyer::with('diaries','erasers','pens')->Sum('amount')->get() ;

        $buyers = Buyer::with('diaries','erasers','pens')->get() ;

        $blist =  array();
        foreach($buyers as $buyer){
            $amount = $buyer->diaries->sum('amount')+ $buyer->erasers->sum('amount')+ $buyer->pens->sum('amount');
            $blist[$amount] = $buyer->id;
        }
        krsort($blist);
        $result = array();
        foreach ($blist as $k=>$v){
            array_push($result,$v);
        }
        // dd($result[1],$blist);
        $second_buyer =   Buyer::with('diaries','erasers','pens')->find($result[1]);

        $data = ["Buyer id" => $second_buyer->id,
                "Buyer Name" =>$second_buyer->name	,
                "Total Diary Taken" =>$second_buyer->diaries->sum('amount'),
                "Total Pen Taken" =>$second_buyer->pens->sum('amount'),
                "Total Eraser Taken" =>$second_buyer->erasers->sum('amount'),
                "Total items Taken" =>$second_buyer->diaries->sum('amount')+$second_buyer->pens->sum('amount')+$second_buyer->erasers->sum('amount')];

        return view('Buyer.index',compact('data'));
    }

    public function SecondBuyerNoElq(){



        $second_buyer = DB::select(DB::Raw("select buyers.id,buyers.name, ifnull(d.amount,0) as d_taken,ifnull(e.amount,0) as e_taken,ifnull(p.amount,0) as p_taken,(ifnull(d.amount,0)+ifnull(e.amount,0)+ifnull(p.amount,0)) as total_taken
        from buyers
        left join (select diary_taken.buyer_id, SUM(diary_taken.amount) as amount from diary_taken group by diary_taken.buyer_id) as d on buyers.id=d.buyer_id
        left join (select eraser_taken.buyer_id, SUM(eraser_taken.amount) as amount from eraser_taken group by eraser_taken.buyer_id) as e on buyers.id=e.buyer_id
        left join (select pen_taken.buyer_id, SUM(pen_taken.amount) as amount from pen_taken group by pen_taken.buyer_id) as p on buyers.id=p.buyer_id
        order by total_taken desc
        limit 1,1"));

        $second_buyer = (array)$second_buyer[0];


        return view('Buyer.index',compact('second_buyer'));
    }

    public function PurchaseListElq(){

        return view('Purchase.index');
    }
    public function PurchaseListNoElq(){

        $purchase_list = DB::select(DB::Raw("select buyers.id,buyers.name, ifnull(d.amount,0) as d_taken,ifnull(e.amount,0) as e_taken,ifnull(p.amount,0) as p_taken,(ifnull(d.amount,0)+ifnull(e.amount,0)+ifnull(p.amount,0)) as total_taken
        from buyers
        left join (select diary_taken.buyer_id, SUM(diary_taken.amount) as amount from diary_taken group by diary_taken.buyer_id) as d on buyers.id=d.buyer_id
        left join (select eraser_taken.buyer_id, SUM(eraser_taken.amount) as amount from eraser_taken group by eraser_taken.buyer_id) as e on buyers.id=e.buyer_id
        left join (select pen_taken.buyer_id, SUM(pen_taken.amount) as amount from pen_taken group by pen_taken.buyer_id) as p on buyers.id=p.buyer_id
        order by total_taken asc"));

        $purchase_list = (array)$purchase_list;
        $plist = array();
        foreach($purchase_list as $pitem){
            array_push($plist,(array)$pitem);
        }
        $purchase_list = $plist;
        // dd($purchase_list);

        return view('Purchase.index',compact('purchase_list'));
    }

    public function getAnalytic(){
        return view('Analytic.index');
    }

    public function getAnimation(){
        return view('Animation.index');
    }
}
