<?php

class TeamPoint_model extends Crud_model {

    
     public function create($options) {
   
           $this->db->insert('point_categories', $options);
           return $this->db->insert_id();

     }

     public function users_form_data() {
           
         
     	  $query = $this->db->get('users');
     	  return $query;
     }

      public function categories_form_data() {
           
          $query = $this->db->get('point_categories');
     	  return $query;
     }

     public function createPoint($options) {
   
           $this->db->insert('team_points', $options);
           return $this->db->insert_id();

     }

     public function fetch_single_data($id) {
       
          $sql = "SELECT b.id as rId, b.marks, b.date, a.name, a.id as cId, c.id as uId, c.first_name, c.last_name
                  FROM point_categories as a
                  JOIN team_points as b ON a.id = b.category_id
                  JOIN users as c ON c.id = b.employee_id
                  WHERE b.id = $id";
          $query = $this->db->query($sql);
     	  return $query;
     	 
     }

     public function update($options, $id) {
           
           $this->db->where('id', $id);
           $this->db->update('team_points', $options);
           return $this->db->affected_rows();

     }

     public function deletePoint($id) {
           

           $this->db->where('id', $id);
           $this->db->delete('team_points');
           return $this->db->affected_rows();

     }

     public function fetchMarks($month, $year) {

       
       $sql =  "SELECT sum(marks) as mark,first_name, last_name 
                FROM team_points as a 
                JOIN users as b 
                WHERE a.employee_id =  b.id AND
                MONTH(date) = $month AND YEAR(date) = $year
                group by employee_id";
     	$query = $this->db->query($sql);
     	return $query;
     	
     }

     public function allData() {
             
        $sql = "SELECT b.id, a.name, b.marks, b.date, c.first_name, c.last_name
                FROM point_categories as a
                JOIN team_points as b ON a.id = b.category_id
                JOIN users as c ON c.id = b.employee_id";
     	$query = $this->db->query($sql);
     	return $query;

     }

    public function getRecords($optionMonth, $optionYear) {

        
           //  fetch month
           foreach ($optionMonth as $key => $value) {
            
                  $month = $value;
             
           }

           // fetch year
           foreach ($optionYear as $key => $value) {
            
                $year = $value;
             
           }

           $sql =  "SELECT sum(marks) as mark,first_name, last_name 
                FROM team_points as a 
                JOIN users as b 
                WHERE a.employee_id =  b.id AND
                MONTH(date) = $month AND YEAR(date) = $year
                group by employee_id";
     	  $query = $this->db->query($sql);
     	  return $query;

       }

}

