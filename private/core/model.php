<?php


/**
 * main Model
 */
class Model extends Database
{
	//protected $table ="users";

	function __construct()
	{
		//echo $this::class;
		if(!property_exists($this, 'table')){

			$this->table=strtolower($this::class)."s";
		}
	}

	public function where($column,$value){
		$column =addcslashes($column);

      $query ="select * from $this->table where $column = :value";
      return $this->query($query,[

          
          'value'=>$value
      ]);
	}

	public function findAll(){
		

      $query ="select * from $this->table";

      return $this->query($query);
      
	}

	public function insert($data){

          $keys =array_keys($data);
          $columns =implode(',', $keys);
          //var_dump( $columns);
           $value =implode(',:', $keys);

         $query="insert into $this->table ($columns) values(:$value)";

      return $this->query($query,$data);
	}
	public function update($id,$data){
		//print_r($data);
        $data['id']=$id;
        //print_r($data['id']);
        $str="";
        foreach ($data as $key => $value) {
        	$str .=$key."=:".$key.",";
        }

		 
         $str =trim($str,",");
          //print_r( $str);
        

        

      $query ="update  $this->table set $str where id =:id";
      return $this->query($query,$data);
	}
	public function delete($id){
		$column =addcslashes($column);

      $query ="select * from $this->table where $column = :value";
      return $this->query($query,[

          
          'value'=>$value
      ]);
	}
}