<?php

namespace App\Exceptions;

use App\Models\Contact;
use App\Models\DisplayOne;
use App\Models\DisplaySecond;
use App\Models\DisplaysThree;
use App\Models\Logo;
use App\Models\Menu;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;



class Layout extends ExceptionHandler
{
    static function getMenu(){
        $menu = Menu::where('parent_id', null)->where('status', 0)->get()->toArray();

        $sub_menu = Menu::where('parent_id', '!=',null)->where('status', 0)->get()->toArray();

        $menu_final = [];

        foreach ($menu as $key => $m){
            $menu_final[$key] = $m;
            foreach ($sub_menu as $s_m){
                if ($m['id'] == $s_m['parent_id']){
                    $menu_final[$key]['sub_menu'][] = $s_m;
                }
            }
        }

        return $menu_final;
    }

    static function getLogo(){
        $logo_h = Logo::where('position', 1)->first();
        $logo_f1 = Logo::where('position', 2)->first();
        $logo_f2 = Logo::where('position', 3)->first();

        return [
            'logo_h' => $logo_h,
            'logo_f1' => $logo_f1,
            'logo_f2' => $logo_f2
        ];
    }

    static function getDisplays(){
        $display_one = DisplayOne::where('display',1)->first();
        $display_second = DisplayOne::where('display',2)->first();
        $display_three = DisplayOne::where('display',3)->get();
        $display_five = DisplayOne::where('display',5)->get();

        return [
            'display_one' => $display_one,
            'display_second' => $display_second,
            'display_three' => $display_three,
            'display_five' => $display_five,
        ];
    }

    static function getContact(){
        return [
            'contact' => Contact::get()
        ];
    }
}
