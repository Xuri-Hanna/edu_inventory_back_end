<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\NhanVienController;
use App\Http\Controllers\api\GiaoVienController;
use App\Http\Controllers\api\HocSinhConTroller;
use App\Http\Controllers\api\TaiKhoanController;
use App\Http\Controllers\api\ChucVuController;
use App\Http\Controllers\api\DonViCongTacController;


Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});

//HE THONG
Route::apiResource('tai_khoans',TaiKhoanConTroller::class);
Route::get('/get_tai_khoans', [TaiKhoanController::class, 'getUnused']);
Route::apiResource('chuc_vus',ChucVuConTroller::class);
Route::get('/get_chuc_vus', [ChucVuController::class, 'getList']);
Route::apiResource('don_vi_cong_tacs', DonViCongTacController::class);
Route::get('/ten_don_vis', [DonViCongTacController::class, 'getTenDonVi']);


//NHAN SU
Route::apiResource('nhan_viens',NhanVienController::class);
Route::apiResource('giao_viens',GiaoVienController::class);
Route::apiResource('hoc_sinhs',HocSinhConTroller::class);


