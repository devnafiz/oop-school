<?php


/**
 * main Model
 */
class Model extends Database
{
	public $errors =array();

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

          //remove un wanted column
        if(!property_exists($this, 'allowedColumns')){

          foreach($data as $key =>$column)
            {
              if(!in_array($key, $this->allowedColumns)){
                unset($data($key))
              }
            }


      
    }
      //insert before function
        if(!property_exists($this, 'beforeInsert')){

      foreach ($this->beforeInsert as $func){

         $data=$this->$func($data); //this is veriable  so use $

      }
    }

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
		

      $query ="delete from $this->table where id = :id";
       $data['id']=$id;
      return $this->query($query,$data);
	}
}