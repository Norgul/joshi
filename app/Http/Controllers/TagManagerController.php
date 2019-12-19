<?php

namespace MailChamp\Http\Controllers;

use Illuminate\Http\Request;
use MailChamp\TagManager;
use MailChamp\MailList;

class TagManagerController extends Controller
{
    public function index(Request $request)
    {
        $lists = TagManager::orderBy('id','desc')->paginate();
        return view('tags.index',['lists'=>$lists]);
    }

    public function create(Request $request){
       return view('tags.create');
    }

    public function store(Request $request){

        $tag_data=new TagManager();
        $tag_data->name=$request->name;
        $tag_data->save();

        return redirect('/tag/lists');

    }

    public function edit($id){
        $data=TagManager::find($id);
      return view('tags.edit',['data'=>$data]);
    }

    public function update(Request $request){

        $data=TagManager::find($request->id);
        $data->name=$request->name;
        $data->save();
        return redirect('/tag/lists');
    }

    public function delete($id){
        TagManager::find($id)->delete();
        return redirect('/tag/lists');
    }
}
