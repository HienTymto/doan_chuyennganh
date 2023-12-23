<?php
namespace App\Http\Controllers\admin;

use App\Http\Requests\BaiVietRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tintuc;
use Illuminate\Support\Facades\Storage;

class TintucController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view("admin.adminPage");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(BaiVietRequest $request)
    {


        $params = $request->except('_token');
        // if ($request->hasFile('anh')) {
        //     $anh = $request->file('anh');
        //     $filename = $anh->store('public/images');
        //     $params['anh'] = $filename;
        // }
        unset($params['matintuc']);

        $tintuc = Tintuc::create($params);

        if ($tintuc) {
            return redirect()->route('admin')->with('success', 'Thêm bài viết thành công');
        }
    }

    public function danhsach()
    {
        $tintuc = Tintuc::all();
        return view("admin.danhSach", compact('tintuc'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin.thembaiviet');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(BaiVietRequest $request, string $id)
    {
        $tintuc = Tintuc::find($id);
        $params = $request->except('_token');
        // if ($request->hasFile('anh')) {
        //     $resultImg = Storage::delete($tintuc->anh);
        //     if ($resultImg) {
        //         $anh = $request->file('anh');
        //         $filename = $anh->store('public/images');
        //         $params['anh'] = $filename;
        //     } else {
        //         $params['anh'] = $tintuc->anh;
        //     }
            $result = $tintuc->update($params);
            if ($result) {
                return redirect()->route('admin', ['id' => $id])->with('success', 'Chỉnh sửa bài viết thành công');
            }
        // }
        return view('admin.Suabaiviet', compact('tintuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(string $id)
    {
        $tintuc = Tintuc::find($id);
        return view('admin.Suabaiviet', compact('tintuc'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tintuc = Tintuc::find($id);

        $tintuc->delete();
        return redirect()->back()->with('success', 'Xóa bài viết thành công');
    }
}
