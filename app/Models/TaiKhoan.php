<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    protected $table = 'tai_khoan';       // Tên bảng
    protected $primaryKey = 'ID';         // Tên khóa chính
    protected $keyType = 'string';        // Kiểu khóa chính là string
    public $incrementing = false;         // Không tự tăng
    public $timestamps = false;           // Không có cột created_at/updated_at

    protected $fillable = [
        'ID',
        'username',
        'password',
    ];
}
