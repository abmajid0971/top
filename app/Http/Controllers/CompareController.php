<?php

namespace App\Http\Controllers;

use App\Models\Compare;
use App\Models\offer;

use Illuminate\Http\Request;

class CompareController extends Controller
{
    
    public function index()
    {
        //
    }
    function NewComparisonOffer()
    {
        
        return view('admin.Offer.CreateCompareOffer');
        
    }
    public function SaveComparisonOffer(Request $req)
    {
        $compare=new compare();
        $compare->Rank=$req->ddRank;
        $compare->Name=$req->txtName;
        
        $compare->Promo_Text_TOP=$req->txtPromo_Text_TOP;
        $compare->Promo_text_1=$req->txtPromo_text_1;
        $compare->Promo_text_2=$req->txtPromo_text_2;
        $compare->Promo_text_3=$req->txtPromo_text_3;

        
        // $offerlist=offer::all();

        //  $offercount= $offerlist->count();
        //  if ($offercount>=$req->ddRank) {
        //     $result="Please select lower Rank";
        //  }
        //  else {
        //     $result=$req->ddRank;
        //     $compare->save();
        //     return redirect('NewComparisonOffer');

        //  }

        $compare->save();

           return redirect('NewComparisonOffer');
    }
    
    public  function get_offer($id)
    {

        $offercompare= compare::find($id);
        // $offertop=new offers();
        $offertop=offer::where('Rank',1)->get();
//echo '<pre>'.print_r($offertop,true).'</pre>';
        $html = ' <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&nbsp;</button>
                <h4 class="modal-title" id="compareModalTitle">Comparing <span class="cTitle">'.$offercompare->Name.'</span>
                    vs '.$offertop[0]->Name.'</h4>
                <p class="modal-title-tag">Our #1 pick for the best dating sites compared with other sites</p>
            </div>

            <div class="modal-body">
                <div class="row modalrow">
                    <div class="col-12 col-md-12 leftcontainer">
                        <div class="characteristic">Characteristics</div>
                        <div class="title">'.$offercompare->Promo_Text_TOP.'</div>

                        <div class="features">
                            <p>What Facebook offers</p>
                            <ul>
                                <li class="red">'.$offercompare->Promo_text_2.'
                                </li>
                                <li class="red">'.$offercompare->Promo_text_3.'</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 rightcontainer">
                        <div class="characteristic"><img src="assets/images/verified.svg" />Our #1 Top Pick</div>
                        <div class="title"> <img src='.asset('uploads/'.$offertop[0]->Icon).' alt="Perfect Dating"></div>
                        <div class="features">
                            <p>What Perfect Dating offers</p>
                            <ul>
                                <li class="green">'.$offertop[0]->Promo_text_1.'</li>
                                <li class="green">'.$offertop[0]->Promo_text_2.'</li>
                                <li class="green">'.$offertop[0]->Promo_text_3.'</li>
                            </ul>

                            <a class="visitsitebutton"
                                href="'.$offertop[0]->Visit_Site_Click_URL.'"
                                target="_blank">Visit Site</a>
                        </div>
                    </div>
                    
                </div>


            </div>
        </div>';
        echo $html;
        //  return view('index', compact('offer=>'$offer,'offer1'=>$$offer1));

    }
    function ComparisonList()
    {
        $Comparison=new compare();

         $Comparison=compare::all();

         return view('admin.Offer.ComparisonList')->with('Comparison', $Comparison);
        
    }
    function OfferMainPage()
    {
        $offertop=new offer();
        $offertop=offer::where('Rank',1)->get();
        $offerother=new offer();
        $offerother=offer::where('Rank','!=', 1)->where('Rank','!=', ['Editor Choice'])->orderBy('Rank')->get();
        $offerothercount=offer::where('Rank','!=', 1)->where('Rank','!=', ['Editor Choice'])->orderBy('Rank')->count();

        $offerEditor=new offer();
        $offerEditor=offer::where('Rank','=', 'Editor Choice')->get();
        $offerEditorcount=offer::where('Rank','=', 'Editor Choice')->count();

         $offercompare=new compare();
         $offertopcount=offer::where('Rank','=',1)->count();
         
         $offercompare=compare::orderBy('Rank')->get();
        // $offertopcount=new offer();
        // $offertopcount=offer::where('Rank',1)->count();
        $wordlist = offer::count();
        // $wordCount = $wordlist;
         return view('index', compact(['offertop','offerother','offercompare','offerEditor','offertopcount','offertopcount','wordlist','offerothercount','offerEditorcount']));
        //  return view('index', compact('offer=>'$offer,'offer1'=>$$offer1));
        
    }
    public function updateComparison(Request $req)
    {
        $compare=compare::find($req->txtID);

        // $compare=new compare();
        $compare->Rank=$req->ddRank;
        $compare->Name=$req->txtName;
        
        $compare->Promo_Text_TOP=$req->txtPromo_Text_TOP;
        $compare->Promo_text_1=$req->txtPromo_text_1;
        $compare->Promo_text_2=$req->txtPromo_text_2;
        $compare->Promo_text_3=$req->txtPromo_text_3;

        $compare->save();

           return redirect('ComparisonList');
    }
    function editComparison(Request $req, $id)
    {
        $Comparison=new compare();
        $Comparison=compare::find($id);
        
        
        return view('admin.Offer.EditComparison')->with('Comparison', $Comparison);

        
    }
    
}
