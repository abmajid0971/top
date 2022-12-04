<?php

namespace App\Http\Controllers;

use App\Models\offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    function NewOffer()
    {
        
        return view('admin.Offer.CreateOffer');
        
    }
    public function create(Request $req)
    {
        $offer=new offer();
        $offer->Rank=$req->ddRank;
        $offer->Name=$req->txtName;
        if ($req->hasfile('imgfile')) {
            # code...
        $varimg =$req->file('imgfile');
        $varimg_ext=$varimg->getclientOriginalExtension();
        $varimg_name="offer".rand(123456,999999).".".$varimg_ext;
        $img_dest_path=public_path('/uploads/');
        $varimg->move($img_dest_path,$varimg_name);
        $offer->Icon=$varimg_name;
    }
        $offer->Promo_Text_TOP=$req->txtPromo_Text_TOP;
        $offer->Promo_text_1=$req->txtPromo_text_1;
        $offer->Promo_text_2=$req->txtPromo_text_2;
        $offer->Promo_text_3=$req->txtPromo_text_3;

        $offer->Score=$req->txtScore;

        $offer->Stars=$req->product_rating;
        $offer->Ages=$req->txtAges;
        $offer->Visit_Site_Click_URL=$req->txtVisit_Site_Click_URL;
        $offer->text_below_click_url=$req->txttext_below_click_url;
        $offer->save();

           return redirect('OfferList');
    }
    function OfferList()
    {
        $offer=new offer();

         $offer=offer::all();

         return view('admin.Offer.OfferList')->with('Offer', $offer);
        
    }
    function OfferMainPage()
    {
        $offer=new offers();
        $offer=offers::where('Purpose','VISIT SITE')->get();

         $offer=new offers();
         $offerlist=offers::all();

         $star= offers::where('Stars',3);
         $comparelist=compare::all();

         $comparecount= $comparelist->count();
        //  $offer=offers::where('Purpose','COMPARE')->get();
         return view('index',compact(['offer'=> $offer,'offercount','comparecount','star'=> $star]));
        
    }
    
    
    public function updateoffer(Request $req)
    {
        $offer=new offer();

        $offer=offer::find($req->txtID);

        $offer->Rank=$req->ddRank;
        $offer->Name=$req->txtName;
        if ($req->hasfile('imgfile')) {
            # code...
            $destination='/uploads'.$offer->Icon;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            # code...
        $varimg =$req->file('imgfile');
        $varimg_ext=$varimg->getclientOriginalExtension();
        $varimg_name="offer".rand(123456,999999).".".$varimg_ext;
        $img_dest_path=public_path('/uploads/');
        $varimg->move($img_dest_path,$varimg_name);
        $offer->Icon=$varimg_name;
    }
        $offer->Promo_Text_TOP=$req->txtPromo_Text_TOP;
        $offer->Promo_text_1=$req->txtPromo_text_1;
        $offer->Promo_text_2=$req->txtPromo_text_2;
        $offer->Promo_text_3=$req->txtPromo_text_3;

        $offer->Score=$req->txtScore;
        $offer->Stars=$req->txtStars;
        $offer->Ages=$req->Ages;
        $offer->Visit_Site_Click_URL=$req->txtVisit_Site_Click_URL;
        $offer->text_below_click_url=$req->txttext_below_click_url;
        $offer->save();

           return redirect('OfferList');
    }
    function Editoffer(Request $req, $id)
    {
        $offer=new offer();
        $offer=offer::find($id);
        
        
        return view('admin.Offer.EditOffer')->with('offer', $offer);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offers $offers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function destroy(offers $offers)
    {
        //
    }
}
