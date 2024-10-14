<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    // Lấy danh sách tất cả các festival
    public function index()
    {
        $festivals = Festival::with('user')->get();
        return response()->json($festivals);
    }

    // Tạo mới một festival
    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'money' => 'required|string',
            'cut_open' => 'required|string',
            'part' => 'required|string',
            'note' => 'nullable|string',
            'status' => 'required|string',
            'is_supported' => 'required|boolean',
        ]);

        $festival = Festival::create($request->all());
        return response()->json($festival, 201);
    }

    // Lấy thông tin một festival theo ID
    public function show($id)
    {
        $festival = Festival::findOrFail($id);
        return response()->json($festival);
    }

    // Cập nhật thông tin một festival
    public function update(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'money' => 'required|string',
            'cut_open' => 'required|string',
            'part' => 'required|string',
            'note' => 'nullable|string',
            'status' => 'required|string',
            'is_supported' => 'required|boolean',
        ]);

        $festival = Festival::findOrFail($id);
        $festival->update($request->all());
        return response()->json($festival);
    }

    // Xóa một festival
    public function destroy($id)
    {
        $festival = Festival::findOrFail($id);
        $festival->delete();
        return response()->json(null, 204);
    }
}
