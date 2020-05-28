<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

	  public function donor()
  {
  	return $this->belongsTo('App\Donor');
  } 

  public function supplier()
  {
  	return $this->belongsTo('App\Supplier');
  }

	public $table = 'inventories';
	 /*   protected $fillable = [
	        'Voucher_reference', 'Item', 'Qty', 'Category', 'Funded_by', 'Model_serial', 'Date_purchase', 'Currency', 'Price', 'Total', 'Region_file', 'Asset_condition', 'Tag', 'As_per_record', 'Verified', 'Difference', 'Remarks' ];*/

    protected $fillable = ['Voucher_reference', 'Item', 'Qty', 'Category', 'Funded_by', 'Model_serial', 'Date_purchase', 'Currency', 'Price', 'Total', 'Region_file', 'Asset_condition', 'Tag', 'As_per_record', 'Verified', 'Difference', 'Remarks'];

 

}
