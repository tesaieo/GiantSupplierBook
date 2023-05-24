<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Detail;
use App\Models\Publisher;
use Database\Seeders\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function index(){
        $data = Category::leftJoin('book_categories', 'categories.categoryId', '=', 'book_categories.categoryId')
                ->leftJoin('details', 'book_categories.bookId', '=', 'details.bookId')
                ->leftJoin('publishers', 'details.publisherId', '=', 'publishers.publisherId')
                ->select('categories.category', 'categories.categoryId','details.bookTitle', 'details.bookAuthor', 'details.bookImg', 'details.bookId')
                ->get();
        
        return view('welcome',['data' => $data]);
    }

    public function publisher(){
        $data = Publisher::all();
        
        return view('publisher',['publisher' => $data]);
    }

    public function publisherBooks($publisherId){
        $booksData = Publisher::rightJoin('details', 'publishers.publisherId', '=', 'details.publisherId')
        ->select('details.bookId','details.bookTitle', 'details.bookImg','details.bookAuthor','publishers.publisherName', 'publishers.publisherAddress', 'publishers.publisherAddress', 'publishers.publisherLogo', 'publishers.publisherPhone', 'publishers.publisherEmail')
        ->where('publishers.publisherId', $publisherId)
        ->get();
        
        return view('allBooks',['booksDatas' => $booksData]);
    }

    public function find($bookId){
        //book Cover, bookTitle, publisher, year, sinopsis
        $data = Detail::leftJoin('publishers', 'details.publisherId', '=', 'publishers.publisherId')
        ->select('details.bookImg', 'details.bookTitle', 'publishers.publisherName', 'details.bookYear', 'details.bookSynopsis')
        ->where('details.bookId',$bookId)->first();

        return view('bookDetail', ['datas' => $data]);
    }


    public function categoryBook($categoryId){

        $categoryBooks = Category::leftJoin('book_categories', 'categories.categoryId', '=', 'book_categories.categoryId')
                ->leftJoin('details', 'book_categories.bookId', '=', 'details.bookId')
                ->leftJoin('publishers', 'details.publisherId', '=', 'publishers.publisherId')
                ->select('categories.category', 'categories.categoryId','details.bookTitle', 'details.bookAuthor', 'details.bookImg', 'details.bookId')
                ->where('categories.categoryId',$categoryId)->get();

        return view('category', ['datas' => $categoryBooks]);
    }
    
}
