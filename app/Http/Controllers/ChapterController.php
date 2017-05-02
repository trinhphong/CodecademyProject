<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateChapterRequest;
use App\Chapter;
class ChapterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        return view('admin.chapter.create');
    }

    public function store(CreateChapterRequest $request)
    {
        Chapter::create([
           'name' => $request->name,
            'course_id' => $request->course_id,
        ]);
        return redirect()->route('admin.chapter.show', 1)->with('message','Thêm Chapter thành công');
    }

    public function edit(Chapter $chapter)
    {
        return view('admin.chapter.edit', compact('chapter'));
    }

    public function update(Request $request, Chapter $chapter)
    {
        $chapter->update($request->all());
        return redirect()->route('admin.chapter.show',1)->with('message','Cập nhật Chapter thành công');
    }

    public  function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return redirect()->route('admin.chapter.show', 1)->with('message','Xóa thành công');
    }
}
