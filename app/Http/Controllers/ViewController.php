<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewLogin(){ return view( 'login' ); }
    public function viewRegister(){ return view( 'register' ); }
    public function viewHome(){ return view( 'home' ); }
    public function viewManageBooks(){ return view( 'managebooks' ); }
    public function viewBookDetails(){ return view( 'bookdetails' ); }
    public function viewManageGenres(){ return view( 'managegenres' ); }
    public function viewGenreDetails(){ return view( 'genredetails' ); }
    public function viewManagerUsers(){ return view( 'managerusers' ); }
    public function viewUserDetails(){ return view( 'userdetails' ); }
    public function viewViewCart(){ return view( 'viewcart' ); }
    public function viewEditCartItems(){ return view( 'editcartitems' ); }
    public function viewViewTransactionHistory(){ return view( 'viewtransactionhistory' ); }
    public function viewViewTransactionHistoryDetails(){ return view( 'viewtransactionhistorydetails' ); }
    public function viewProfile(){ return view( 'profile' ); }
    public function viewChangePassword(){ return view( 'changepassword' ); }
}
