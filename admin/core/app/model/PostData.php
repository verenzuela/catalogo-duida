<?php
class PostData {
	public static $tablename = "post";

	public function PostData(){
		$this->title = "";
		$this->content = "";
		$this->image = "";
		$this->link = "";
		$this->category_id = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";

		

	}

	public function getUnit(){ return UnitData::getById($this->unit_id);}

	public function add(){

		if(!$this->price_no_vat) $this->price_no_vat = 0;
		if(!$this->discount_percentage) $this->discount_percentage = 0;
		if(!$this->price_suggested) $this->price_suggested = 0;
		if(!$this->price_grava) $this->price_grava = 0;

		$sql = "insert into ".self::$tablename." (short_name,code,name,description,image,link,category_id,is_public,is_featured,created_at,brand,presentation,ean13,ean14,package_least,package_wholesale,dimension_pallet,dimension_package,weight,price_no_vat,discount_percentage,price_suggested,price_grava) ";
		$sql .= "value (\"$this->short_name\",\"$this->code\",\"$this->name\",\"$this->description\",\"$this->image\",\"$this->link\",$this->category_id,$this->is_public,$this->is_featured,$this->created_at,\"$this->brand\",\"$this->presentation\",\"$this->ean13\",\"$this->ean14\",\"$this->package_least\",\"$this->package_wholesale\",\"$this->dimension_pallet\",\"$this->dimension_package\",\"$this->weight\",$this->price_no_vat,$this->discount_percentage,$this->price_suggested,$this->price_grava)";

		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto PostData previamente utilizamos el contexto
	public function update(){

		if(!$this->price_no_vat) $this->price_no_vat = 0;
		if(!$this->discount_percentage) $this->discount_percentage = 0;
		if(!$this->price_suggested) $this->price_suggested = 0;
		if(!$this->price_grava) $this->price_grava = 0;

		$sql = "update ".self::$tablename." set code=\"$this->code\",name=\"$this->name\",description=\"$this->description\",link=\"$this->link\",is_public=\"$this->is_public\",is_featured=\"$this->is_featured\",category_id=\"$this->category_id\",brand=\"$this->brand\",presentation=\"$this->presentation\",ean13=\"$this->ean13\",ean14=\"$this->ean14\",package_least=\"$this->package_least\",package_wholesale=\"$this->package_wholesale\",dimension_pallet=\"$this->dimension_pallet\",dimension_package=\"$this->dimension_package\",weight=\"$this->weight\",price_grava=$this->price_grava,price_no_vat=$this->price_no_vat,discount_percentage=$this->discount_percentage,price_suggested=$this->price_suggested where id=$this->id";
		Executor::doit($sql);

	}

	public function update_image(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PostData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PostData());
	}

	public static function getPublicsByCategoryId($id){
		$sql = "select * from ".self::$tablename." where category_id=$id and is_public=1 order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PostData());
	}

	public static function get4News(){
		$sql = "select * from ".self::$tablename." where is_new=1 and is_public=1 order by created_at desc limit 4";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PostData());
	}

	public static function get4Offers(){
		$sql = "select * from ".self::$tablename." where is_offer=1 and is_public=1 order by created_at desc limit 4";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PostData());
	}

	public static function getNews(){
		$sql = "select * from ".self::$tablename." where is_new=1 and is_public=1 order by created_at desc limit 4";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PostData());
	}

	public static function getFeatureds(){
		$sql = "select * from ".self::$tablename." where is_featured=1 and is_public=1 order by created_at desc limit 6";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PostData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%' or description like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PostData());
	}


}

?>