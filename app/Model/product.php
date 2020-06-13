<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
      protected $fillable = ['type', 'price', 'created_by', 'status', 'remarks'];

       //appends
    public function getDecodedStatusAttribute(){
    	if ($this->status == 0) {
    		
    		return "In-Active";
    	}
    	return "Active";
    }

  protected $appends = ['decoded_status'];
}
