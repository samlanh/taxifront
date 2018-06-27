<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class CustomerModel extends Model
{
    //
    protected $table = 'tp_customer';
    protected $fillable = ['customerName', 'gender', 'age', 'tel', 'email',"createDate","modifyDate", 'password', 'status', 'photo', 'registerBy', 'isVerify' , 'verifyDate', 'userID', 'paymentType', 'cardholderFirstName','cardholderLastName','cardNumber','expiryMonth','expiryYear','securityCode'];
    protected $updated_at = 'modifyDate';
    protected $created_at = 'createDate';




}
