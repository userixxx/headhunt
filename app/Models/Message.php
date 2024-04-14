<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $fillable = ['body', 'sender_id', 'sms_type'];

    /**
     * Получить пользователя, отправившего сообщение.
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
