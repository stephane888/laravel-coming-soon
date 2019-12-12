<?php 
namespace Stephane888\LaravelComingSoon\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class LaravelComingSoon extends Controller{
    
    public function index(){
        
        return view('LaravelComingSoon::LaravelComingSoon.pages.page-static-image', ['header'=>$this->NavbarText(), 'footer'=>$this->NavbarTextFooter()]);
    }
    
    /**
     * 
     */
    protected function NavItems(){
        return ['NavItems'=>
            ['title'=>'+00 123 456 789','link'=>'','icone'=>''],
            ['title'=>'hello@domain.com','link'=>'','icone'=>''],            
        ];
    }
    
    /**
     * 
     */
    protected function NavbarText(){
        return ['NavbarText' => [
                ['item'=>'+00 123 456 789',],
                ['item'=>'hello@domain.com',]
            ]
        ];
    }
    
    protected function NavbarTextFooter(){
        return ['NavbarText' => [
            ['item'=>'Copyright © 2019 wb-universe.com. All Rights Reserved.',]
        ]
        ];
    }
}