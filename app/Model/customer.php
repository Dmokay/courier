<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = ['name', 'id_no', 'phone_no', 'status'];

    //appends
    public function getDecodedStatusAttribute(){
    	if ($this->status == 0) {
    		
    		return "In-Active";
    	}
    	return "Active";
    }

  protected $appends = ['decoded_status'];
}
