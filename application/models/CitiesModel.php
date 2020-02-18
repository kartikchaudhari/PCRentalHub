<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CitiesModel extends My_Model {

	public function getCityFromCountry($dataString,$sortname,$start,$perPage){
		$sql = "SELECT c.id, c.name,c.asciiname, c.latitude, c.longitude, c.subadmin1_code, s.name AS statename
			FROM `cities` AS c
			INNER JOIN `subadmin1` AS s ON s.code = c.subadmin1_code
 			WHERE (c.name like '%$dataString%' or c.asciiname like '%$dataString%') and c.country_code = '$sortname'
 			ORDER BY
  			CASE
    			WHEN c.name = '$dataString' THEN 1
    			WHEN c.name LIKE '$dataString%' THEN 2
    		ELSE 3
  			END ";
  		$query =  $this->db->query($sql . " LIMIT " . $start . "," . $perPage);
  		return $query->result(); 
	}

	public function getCityCountSimilarToGivenQuqey($dataString,$sortname){
		$query = $this->db->query("SELECT 1 FROM `cities` WHERE name like '$dataString%' AND  country_code = '$sortname'");
		return $query->num_rows();
	}

	public function getCityInfo($city_id){
		$sql="SELECT subadmin1_code,country_code,longitude,latitude FROM cities WHERE id=".$city_id;
		$query=$this->db->query($sql);
		return $query->result();
	}

	public function fetcCityLatLong($city_id){
		$sql="SELECT longitude,latitude FROM cities WHERE id='$city_id'";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

	public function getCityStatebyCityId($cityId){
		$sql="SELECT cities.asciiname AS 'city',subadmin1.asciiname AS 'state' FROM cities,subadmin1 WHERE cities.id='$cityId' AND subadmin1.code=cities.subadmin1_code";
		$query=$this->db->query($sql);
		return $query->row_array();
	}

}

/* End of file CitiesModel.php */
/* Location: ./application/models/CitiesModel.php */