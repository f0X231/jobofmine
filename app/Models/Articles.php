<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = 'id';
    
    // public $timestamps = false;
    // protected $fillable = [
    //                         'order_no',
    //                         'title', 
    //                         'detail', 
    //                         'credit', 
    //                         'thumbnail', 
    //                         'is_home', 
    //                         'is_active', 
    //                         'is_delete', 
    //                         'create_date',
    //                         'create_by',
    //                         'update_date',
    //                         'update_by'
    //                     ];

}


/**
 * $fillable - เป็นตัวแปรที่กำหนดว่า Attributes ใดสามารถแก้ไขค่าได้บ้าง
 * $cast - เป็นตัวแปรที่กำหนดว่า Attributes ใดต้องเปลี่ยนประเภทตัวแปรบ้าง ซึ่งประเภทตัวแปร ประกอบด้วย integer, real, float, double, decimal:<digits>, string, boolean, object, array, collection, date, datetime และ timestamp
 * $dates - เป็นตัวแปรที่กำหนดว่า Attributes ใดต้องถูกเปลี่ยนประเภทเป็น datetime บ้าง ซึ่ง attribute ดังกล่าวจะถูก cast เป็น Carbon instance
 * $hidden - เป็นตัวแปรที่กำหนดว่า Attributes ใดต้องถูกตัดออก เมื่อมีการแปลง Model ไปเป็น JSON
 * $appends - เป็นตัวแปรที่กำหนดว่า Attributes ใดต้องถูกเพิ่มเข้าไป เมื่อมีการแปลง Model ไปเป็น JSON
**/